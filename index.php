<?php
	require("includes/inventrify.class.php");
	$inv=new inventrify();
	$inv->initialize();
	$inv->assign("inv",$inv);
	if (@$_GET['a']=='P') {
		switch(@$_GET['b']) {
			case 'login':
				$isok=$inv->validate_login();
				break;
			case 'm_brand':
				$inv->isSessionActive();
				$inv->assign("content","add_brand.tpl");
				break;
			case 'm_product':
				$inv->isSessionActive();
				$inv->assign("content","add_product.tpl");
				break;
			case 'm_product_list':
				$inv->isSessionActive();
				$inv->assign("content","add_product_list.tpl");
				break;
			case 'm_units':
				$inv->isSessionActive();
				$inv->assign("content","add_units.tpl");
				break;
			case 'inv':
				$inv->isSessionActive();
				$inv->assign("content","add_inventory.tpl");
				break;
			case 'sales':
				$inv->isSessionActive();
				$inv->assign("content","sales.tpl");
				break;
			case 'dashboard':
				$inv->isSessionActive();
				$inv->assign("content","dash_board.tpl");
				break;
			case 'logout':
				$inv->Logout();
				break;
			default:
				$inv->assign("content","nopage.tpl");
		}
		$inv->display('index.tpl');
	}
	else if (@$_GET['a']=='A') {
		switch(@$_GET['b']) {
			case 'm_brand':
				$inv->isSessionActive();
				$inv->add_brand();
				break;
			case 'update_m_brand':
				$inv->isSessionActive();
				$inv->update_brand();
				break;			
			case 'del_m_brand':
				$inv->isSessionActive();
				$inv->delete_brand();
				break;
			case 'm_product':
				$inv->isSessionActive();
				$inv->add_product();
				break;						
			case 'update_m_product':
				$inv->isSessionActive();
				$inv->update_product();
				break;					
			case 'del_m_product':
				$inv->isSessionActive();
				$inv->delete_product();
				break;
			case 'm_product_list':
				$inv->isSessionActive();
				$inv->add_product_list();
				break;
			case 'm_units':
				$inv->isSessionActive();
				$inv->add_units();
				break;
			case 'm_inv':
				$inv->isSessionActive();
				$inv->add_inventory();
				break;
			case 'update_m_inv':
				$inv->isSessionActive();
				$inv->update_inventory();
				break;
			case 'del_m_inv':
				$inv->isSessionActive();
				$inv->delete_inventory();
				break;
			case 'm_sales':
				$inv->isSessionActive();
				$inv->add_sales_order();
				break;
			case 'update_m_sales':
				$inv->isSessionActive();
				$inv->update_sales_order();
				break;
			case 'del_m_sales':
				$inv->isSessionActive();
				$inv->delete_sales_order();
				break;
			case 'getBrands':
				$inv->isSessionActive();
				$inv->get_brands();
				break;	
			case 'getProducts':
				$inv->isSessionActive();
				$inv->get_products();
				break;	
			case 'brands_products_and_inv':
				$inv->isSessionActive();
				$inv->getBrandsProductsAndInv();
				break;
			case 'get_inventory_and_sales':
				$inv->isSessionActive();
				$inv->getInventoryAndSales();
				break;
			case 'getDashboardItems':
				$inv->isSessionActive();
				$inv->getDashboardPanelRecords();
				break;
		}
	}
	else
		$inv->display("login.tpl");
?>
