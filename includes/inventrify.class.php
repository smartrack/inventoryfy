<?php
include("configENV.php");
include("adodb/adodb.inc.php");
include_once('session_start.php');
//Smarty Configurations
require('Smarty/libs/Smarty.class.php');

class inventrify extends Smarty {
	private $db;
	private $pg_start;
	private $slave;
	private $q;
	private $queries;
	
	# Create Database Connection
	public function initialize() {
		parent::__construct();
		$this->template_dir = SITE_ROOT.'/includes/Smarty/templates';
		$this->compile_dir = SITE_ROOT.'/includes/Smarty/templates_c';
		$this->cache_dir = SITE_ROOT.'/includes/Smarty/cache';
		$this->config_dir = SITE_ROOT.'/includes/Smarty/configs';
		$this->assign('APP_PATH',APP_PATH);

		$this->setDB();

		ob_start();
		error_reporting(E_ERROR);
		ini_set("display_errors", 1);
	}
	
	public function end_session()	{
		$this->start_session();
		session_destroy();
	}
	public function isSessionActive() {
		if(!isset($_SESSION['user_id'])){
			header('location: ?a=login&b=sto');
			exit;
		}
	}
	public function setDB() {
		$db = NewADOConnection('mysql') or die('DB object initialization Error.');
		//$db=ADONewConnection('mysql');
		//$db->debug = true;
		$db->Connect(DB_HOST,DB_USER_NAME,DB_PASSWORD,DB) or die('DB Connection Error.');		
		$db->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->db = $db;
	}
	# Function Start Time to Determine Page Load Time
	public function getStartTime() {
		$gentime = explode(' ',microtime());
		$gentime = $gentime[1] + $gentime[0];
		return $gentime;
	}
	# Function End Time to Determine Page Load Time
	public function getEndTime($pg_start) {
		$gentime = explode(' ',microtime());
		$gentime = $gentime[1] + $gentime[0];
		$pg_end = $gentime;
		return $pg_end - $pg_start;
	}
	# Set the Page Start Time for Calulating the Page Generation Time
	public function setStartTime() {
		$this->pg_start = $this->getStartTime();
	}
	# To execute the insert query, using the corresponding parameters.
	public function insert($table,$values) {
		if(!is_array($values))
				return FALSE;
		foreach( $values as $key=>$list) {
				$fld[]= $key;
				$val[]= "'".$list."'";
		}
		$sql = "INSERT INTO $table (".implode(',',$fld).") VALUES (".implode(',',$val).")";
		$this->runQuery('execute',$sql);	
		return TRUE;
	}
	# To execute the update query, using the corresponding parameters.
	public function update($table,$values,$where = null) {		
		if(!is_array($values))
				return FALSE;
		foreach( $values as $k=>$v) {
				$str[]= " $k = '".trim($v)."'";
		}
		foreach( $where as $kw=>$w) {
				$wstr[]= " $kw = '".trim($w)."'";
		}
		$sql = "UPDATE $table SET ".implode(',',$str)." WHERE ".implode(',',$wstr);
		if(! $this->runQuery('execute',$sql)) {				
				return FALSE;
		}
		return TRUE;
	}
	 # Function to Run Query Runs All Queries and Logs Their Stats
	public function runQuery($type='execute',$sql='',$time=0) {
		
		$this->setDB();
		if(!$this->db) {
				$this->setDB();
				# In order to pull foreign characters from the database and display
				# at this time, these 2 queries must be run
				$this->runQuery('execute','SET NAMES utf8');
				$this->runQuery('execute','SET CHARACTER_SET utf8');
		}
		switch($type) {
				case 'execute':
					 $qstart = $this->getStartTime();
					 $results = $this->db->Execute($sql);
					 $qend = $this->getEndTime($qstart);
					 break;
				case 'count':
					 $qstart = $this->getStartTime();
					 $results = $this->db->Execute($sql);
					 $results = $results->RecordCount();
					 $qend = $this->getEndTime($qstart);
					 break;
				case 'getAll':
					 $qstart = $this->getStartTime();
					 $results = $this->db->getAll($sql);
					 $qend = $this->getEndTime($qstart);
					 break;
				case 'getAssoc':
					 $qstart = $this->getStartTime();
					 $results = $this->db->GetAssoc($sql);
					 $qend = $this->getEndTime($qstart);
					 break;
				case 'cache':
					 $qstart = $this->getStartTime();
					 //$results 	= $db->CacheExecute($time,$sql);
					 $results = $this->db->Execute($sql);
					 $qend = $this->getEndTime($qstart);
					 break;
		}
		$this->q++;
		$this->queries['all']['queries'] += 1;
		$this->queries['all']['time'] += number_format($qend,6,'.','');
		$this->queries[$this->q]['query'] = $sql;
		$this->queries[$this->q]['time'] = number_format($qend,6,'.','');
		return $results;
	}
	# Function to validate the login
	public function validate_login() {
		$userid=$_POST['user_id'];
		$password=$_POST['password'];
		$compid=$_POST['company_id'];
		

		$sql="SELECT u.id, u.user_name FROM users u, hmz_cust_info ci where ci.id=u.cust_id
			and u.user_id='$userid' and u.password='$password' and ci.cust_id='$compid';";
		$result=$this->runQuery("getAll",$sql);
		if(count($result)>0) {
			$_SESSION['user_id']=$result[0];
			$_SESSION['user_name']=$result[1];
			header('location: ?a=P&b=dashboard');
		}
		else
			header('location: ?a=login&b=f');

	}
	# Function to Logout the user
	public function Logout() {
		session_unset();
		session_destroy();
		header('location: ?a=login');
	}
	public function get_brands() {
		$sql="SELECT b.id as item_id,b.brand_name as item_name,b.description as item_desc FROM brands b where rstatus='A'";		
		$result=$this->runQuery('getAll',$sql);
		echo json_encode($result);
	}
	public function get_products() {		
		$sql="SELECT p.id as item_id,p.product_name as item_name,p.description as item_desc FROM products p where rstatus='A'";		
		$result=$this->runQuery('getAll',$sql);
		echo json_encode($result);
	}
	public function get_units() {
		$sql="SELECT * FROM units WHERE RSTATUS='A'";
		$result=$this->runQuery('getAll',$sql);
		echo json_encode($result);
	}
	# Function to add brand
	public function add_brand() {
		$values=array("brand_name"=>$_POST['brand_name'],"description"=>$_POST['description']);
		if($this->insert("brands",$values)) {
			echo true;
		}
		else
			echo 'Error while inserting';
	}
	public function getBrandAndProduct(){		
		$sql="SELECT id,brand_name FROM BRANDS WHERE RSTATUS='A'";
		$result=$this->runQuery('getAll',$sql);		
		echo json_encode($result);		
	}
	# Function to add products
	public function add_product() {
		$values=array("product_name"=>$_POST['product_name'],"description"=>$_POST['description']);
		if($this->insert("products",$values)) {			
			echo true;
		}
		else
			echo 'Error while inserting product tbl';
	}# Function to add products
	public function add_inventory() {
		$values=array("brand_id"=>$_POST['brand_list_id'],"product_id"=>$_POST['product_list_id'],"item_name"=>$_POST['item_name'],"entry_date"=>$_POST['purchase_date'],"buy_price"=>$_POST['product_buy_price'],"sell_price"=>$_POST['product_sell_price'],"quantity"=>$_POST['item_qty'],"update_by"=>isset($_SESSION['user_id']));
		if($this->insert("inventory",$values)) {			
			echo '{"inventoryItemList":{"updateFlag":false}}';
		}
		else
			echo 'Error while inserting inventory tbl';
	}
	#Function to insert sales order
	public function add_sales_order() {
		$values=array("customer_name"=>$_POST['customer_name'],"product_id"=>$_POST['inv_id'],"sell_price"=>$_POST['selling_price'],"sell_date"=>$_POST['selling_date'],"prod_qty"=>$_POST['selling_qty'],"comments"=>$_POST['comments']);
		if($this->insert("sales_order",$values)) {			
			echo '{"salesOrderList":{"updateFlag":false}}';
		}
		else
			echo 'Error while inserting sales tbl';
	}
	# Function to update brands
	public function update_brand() {
		$values=array("brand_name"=>$_POST['brand_name'],"description"=>$_POST['description']);
		$where =array("id"=>$_POST['brand_id']);
		if($this->update("brands",$values,$where)) {			
			echo true;
		}
		else
			echo 'Error while updating';
	}
	# Function to update products
	public function update_product() {
		$values=array("product_name"=>$_POST['product_name'],"description"=>$_POST['description']);				
		$where =array("id"=>$_POST['product_id']);
		if($this->update("products",$values,$where)) {			
			echo true;
		}
		else
			echo 'Error while updating';
	}
	# Function to update inventory
	public function update_inventory() {
		$rowIndex = $_POST['row_index'];
		$values=array("brand_id"=>$_POST['brand_list_id'],"product_id"=>$_POST['product_list_id'],"item_name"=>$_POST['item_name'],"entry_date"=>$_POST['purchase_date'],"buy_price"=>$_POST['product_buy_price'],"sell_price"=>$_POST['product_sell_price'],"quantity"=>$_POST['item_qty'],"update_by"=>isset($_SESSION['user_id']));
		$where =array("id"=>$_POST['inv_item_id']);
		if($this->update("inventory",$values,$where)) {			
			echo '{"inventoryItemList":{"updateFlag":true,"rowIndex":'.$rowIndex.'}}';
		}
		else
			echo 'Error while updating';
	}
	# Function to get brand, products to pre populate dropdown values
	public function getBrandsProductsAndInv() {
		$bsql="SELECT b.id as value,b.brand_name as label FROM brands b where rstatus='A'";		
		$bresult=$this->runQuery('getAll',$bsql);
		
		$psql="SELECT p.id as value,p.product_name as label FROM products p where rstatus='A'";		
		$presult=$this->runQuery('getAll',$psql);
		
		$invsql="select i.id as inv_item_id, b.brand_name as brand_name,b.id as brand_id, p.product_name as prod_name, p.id as prod_id, i.item_name as prod_name, i.entry_date as purchase_date, i.buy_price as buy_price, i.sell_price as sell_price, i.quantity as prod_qty from inventory i,brands b,products p where b.id = i.brand_id and p.id = i.product_id";		
		$invresult=$this->runQuery('getAll',$invsql);
		echo '[{"brandDropdownList":'.json_encode($bresult).',"productDropdownList":'.json_encode($presult).',"inventoryItemList":'.json_encode($invresult).'}]';
	}
	# Function to fetch inventory to pre populate dropdown values
	public function getInventoryAndSales() {
		$isql="SELECT i.id as value,i.item_name as label,i.sell_price,i.quantity FROM inventory i where rstatus='A'";		
		$iresult=$this->runQuery('getAll',$isql);
		
		$sosql="SELECT so.id as id,p.item_name as inv_name,so.sell_date,so.customer_name,so.sell_price as selling_price,so.prod_qty as selling_qty,so.comments FROM sales_order so, inventory p where p.id = so.product_id";		
		$soresult=$this->runQuery('getAll',$sosql);
		
		echo '[{"invDropdownList":'.json_encode($iresult).',"salesOrderList":'.json_encode($soresult).'}]';
	}
	# Function to fetch inventory to pre populate dropdown values
	public function getDashboardPanelRecords() {
		$isql="select i.item_name as prod_name, i.quantity as prod_qty from inventory i limit 5";		
		$iresult=$this->runQuery('getAll',$isql);
		
		$sosql="SELECT p.item_name as inv_name,so.customer_name,so.sell_date FROM sales_order so, inventory p where p.id = so.product_id limit 5";		
		$soresult=$this->runQuery('getAll',$sosql);
		
		$drsql="select prod_qty as qty, date(sell_date) as date from sales_order order by sell_date";		
		$drresult=$this->runQuery('getAll',$drsql);
		
		echo '[{"topFiveInvList":'.json_encode($iresult).',"topFiveSalesList":'.json_encode($soresult).',"dailySalesGraph":'.json_encode($drresult).'}]';
	}
	
}
