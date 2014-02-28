<?php /* Smarty version Smarty-3.1.16, created on 2014-02-14 13:38:48
         compiled from "/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/add_brand.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152163335252fd1cd7d02904-13090251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8872315ff30ee4a435a86330d2b1b1d39407fca' => 
    array (
      0 => '/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/add_brand.tpl',
      1 => 1392365324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152163335252fd1cd7d02904-13090251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fd1cd7d88cf7_43992599',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fd1cd7d88cf7_43992599')) {function content_52fd1cd7d88cf7_43992599($_smarty_tpl) {?><div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h4 class="page-header">Brand Master</h4>
			<div class="alert {{alertBoxClass}}" ng-init="alertBoxClass='hidden'">{{ajaxStatusNotificationMessage}}</div>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-info">
				<div class="panel-heading">Add items</div>
					<form class="bs-example form-horizontal">
						<fieldset>
							<legend style="display:none">Create items</legend>
							<table class="table">
								<tbody>
									<tr>
									<td><label for="inputCustomerName">Brand Name</label></td>
									<td><input type="text" ng-model="brandName" id="brand_name" class="form-control"></td>
									</tr>
									<tr>
									<td><label  for="inputProductName">Description</label></td>
									<td><textarea id="description" class="form-control" ng-model="brandDescription"></textarea></td>
									</tr>
								</tbody>
							</table>
							<div class="panel-body">
							<button class="btn btn-default" type="cancel">Clear</button> 
							<button class="btn btn-primary" ng-click="postRecord('m_brand')">Add</button> 
							</div>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="panel panel-danger">
					<div class="panel-heading">					
						<h5 class="pull-left">Brand List</h5>
					<div class="col-xs-4 col-md-offset-1">
						<input type="text" class="form-control input-sm" placeholder="Search">
					</div>
					<div class="clearfix"></div>
				</div>
				<table class="table table-striped table-hover ">
				<tbody><tr>
					<th>#</th>
					<th>Edit</th>
					<th>Brand Name</th>
					<th>Description</th>
					</tr>
					<tr>
					<td>1</td>
					<td><span class="glyphicon glyphicon-pencil"></span></td>
					<td>{{brandName}}</td>
					<td></td>
					</tr>
				</tbody></table>				
			</div>
				<ul class="pagination">
				<li class="disabled"><a href="#">«</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">»</a></li>
				</ul>
		</div>
		</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->
<?php }} ?>
