<?php /* Smarty version Smarty-3.1.16, created on 2014-02-14 11:49:27
         compiled from "/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/left_side_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146330742452fa529e7026f4-40352711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '083f1e5e6901fdd0a8b60d0992bd6637c478da47' => 
    array (
      0 => '/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/left_side_menu.tpl',
      1 => 1392358760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146330742452fa529e7026f4-40352711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fa529e705af5_98997011',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fa529e705af5_98997011')) {function content_52fa529e705af5_98997011($_smarty_tpl) {?><nav class="navbar-static-side" role="navigation">
<div class="sidebar-collapse {{sideBarToggleClass}}">
	<ul class="nav" id="side-menu">
		 <li class="sidebar-search">
			<div class="input-group custom-search-form">
				<input type="text" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</li>
		<li><a href="?a=P&b=dashboard" ng-class="{selected:dashboardMenu}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
		<li><a href="?a=P&b=m_brand" ng-class="{selected:brandMenu}"><i  class="fa fa-plus-square fa-fw"></i>Brand Master</a></li>
		<li><a href="?a=P&b=m_product" ng-class="{selected:productMenu}"><i  class="fa fa-plus-square fa-fw"></i>Product Master</a></li>
		<li><a href="?a=P&b=m_product_list" ng-class="{selected:productListMenu}"><i  class="fa fa-dashboard fa-fw"></i>Products List</a></li>
		<li><a href="?a=P&b=m_units" ng-class="{selected:unitsMenu}"><i  class="fa fa-dashboard fa-fw"></i>Unit Master</a></li>
		<li><a href="?a=P&b=sales" ng-class="{selected:salesMenu}"><i class="fa fa-files-o fa-fw"></i> Sales Order</a></li>
		<li><a href="?a=P&b=inv" ng-class="{selected:inventoryMenu}"><i class="fa fa-edit fa-fw"></i> Inventory</a></li>
		<li><a href="#" ng-class="{selected:reportsMenu}"><i class="fa fa-table fa-fw"></i> Reports</a></li>
		<li><a href="#" ng-class="{selected:chartsMenu}"><i class="fa fa-bar-chart-o fa-fw"></i> Charts</a></li>
	</ul>
<!-- /#side-menu -->
</div>
<!-- /.sidebar-collapse -->
</nav>
<!-- /.navbar-static-side -->
<?php }} ?>
