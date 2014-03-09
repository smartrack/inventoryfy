<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 00:24:54
         compiled from "C:\Apache Group\Apache2.2\htdocs\smartrack\includes\Smarty\templates\add_units.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171475302c455d092c3-78837579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7afd536bd4ac81430afbf65436dae4e1de64ca65' => 
    array (
      0 => 'C:\\Apache Group\\Apache2.2\\htdocs\\smartrack\\includes\\Smarty\\templates\\add_units.tpl',
      1 => 1394305669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171475302c455d092c3-78837579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5302c455d8dfe7_83172071',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5302c455d8dfe7_83172071')) {function content_5302c455d8dfe7_83172071($_smarty_tpl) {?><div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header h3">Units Master</h1>
			<div class="alert {{alertBoxClass}}" ng-init="alertBoxClass='hidden'"></div>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-info">
				<div class="panel-heading">Add items</div>
					<form class="form-horizontal" name="smartrackform">
						<fieldset>
							<legend style="display:none">Create items</legend>
							<table class="table">
								<tbody>
									<tr>
									<td><label  for="inputCustomerName">Unit Name</label></td>
									<td>
										<input type="text" id="unit_name" class="form-control" ng-model="itemNameModel" ng-required="true">
										<input type="hidden" ng-model="row_index" id="row_index">
									</td>
									</tr>
									<tr>
									<td><label  for="inputCustomerName">Items per Unit</label></td>
									<td><input type="text" id="items_per_unit" class="form-control" ng-model="itemPerUnitModel" ng-required="true"></td>
									</tr>
									<tr>
									<td><label  for="inputProductName">Description</label></td>
									<td><textarea id="description" class="form-control" ng-model="itemDescModel" ng-required="true"></textarea></td>
									</tr>
								</tbody>
							</table>
							<div class="panel-body">
							<button class="btn btn-info" type="reset" ng-click="buttonTxt='Add'">Clear</button> 
							<button class="btn btn-primary {{smartrackform.$valid ? '' : 'disabled'}}" ng-click="postRecord('m_units')">{{buttonTxt}}</button> 
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
					<input type="text" class="form-control input-sm" placeholder="Search" ng-model="productListSearchTxt">
				</div>
				<div class="clearfix"></div>
			</div>
			<table class="table table-striped table-hover ">
			<tbody><tr>
				<th>#</th>
				<th>Edit</th>
				<th>Unit Name</th>
				<th>Items per unit</th>
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
