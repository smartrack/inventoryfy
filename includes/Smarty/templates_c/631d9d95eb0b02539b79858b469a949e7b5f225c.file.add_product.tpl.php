<?php /* Smarty version Smarty-3.1.16, created on 2014-02-18 01:41:31
         compiled from "C:\Apache Group\Apache2.2\htdocs\smartrack\includes\Smarty\templates\add_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2936253014ebec3b082-23915363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '631d9d95eb0b02539b79858b469a949e7b5f225c' => 
    array (
      0 => 'C:\\Apache Group\\Apache2.2\\htdocs\\smartrack\\includes\\Smarty\\templates\\add_product.tpl',
      1 => 1392705622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2936253014ebec3b082-23915363',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53014ebeddd067_40898798',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53014ebeddd067_40898798')) {function content_53014ebeddd067_40898798($_smarty_tpl) {?><div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h4 class="page-header">Product Master</h4>
			<div class="alert {{alertBoxClass}}" ng-init="alertBoxClass='hidden'"></div>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-info">
				<div class="panel-heading">Add Product</div>
					<form class="bs-example form-horizontal">
						<fieldset>
							<legend style="display:none">Create Product</legend>
							<table class="table">
								<tbody>
									<tr>
									<td><label for="product_name">Product Name</label></td>
									<td><input type="text" ng-model="itemNameModel" id="product_name" class="form-control">
									<input type="hidden" ng-model="itemIdModel" id="product_id"></td>
									</tr>
									<tr>
									<td><label  for="description">Description</label></td>
									<td><textarea id="description" class="form-control" ng-model="itemDescModel"></textarea></td>
									</tr>
								</tbody>
							</table>
							<div class="panel-body">
							<button class="btn btn-default" type="reset" ng-click="buttonTxt='Add'">Clear</button> 
							<button class="btn btn-primary" ng-click="postRecord('m_product')">{{buttonTxt}}</button> 
							</div>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="panel panel-danger">
					<div class="panel-heading">					
						<h5 class="pull-left">Product List</h5>
					<div class="col-xs-4 col-md-offset-1">
						<input type="text" class="form-control input-sm" placeholder="Search" ng-model="productListSearchTxt">
					</div>
					<div class="clearfix"></div>
				</div>
				<table class="table table-striped table-hover ">
				<tbody><tr>
					<th>#</th>
					<th>Edit</th>
					<th>Product Name</th>
					<th>Description</th>
					</tr>
					
					<tr ng-repeat="item in masterItemsList | filter:productListSearchTxt" ng-click="editListItem($index)">
					<td>{{$index+1}}</td>
					<td><span class="glyphicon glyphicon-pencil"></span></td>
					<td>{{item.item_name}}</td>
					<td>{{item.item_desc}}</td>
					</tr>
				</tbody></table>				
			</div>
		</div>
		</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->
<?php }} ?>
