<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 00:04:35
         compiled from "C:\Apache Group\Apache2.2\htdocs\smartrack\includes\Smarty\templates\add_brand.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2219352fffbba5f0700-34004168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87c2fc7fbbeeff125ce982dabe453ec099c7b6c7' => 
    array (
      0 => 'C:\\Apache Group\\Apache2.2\\htdocs\\smartrack\\includes\\Smarty\\templates\\add_brand.tpl',
      1 => 1394341474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2219352fffbba5f0700-34004168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fffbba8e2636_04567655',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fffbba8e2636_04567655')) {function content_52fffbba8e2636_04567655($_smarty_tpl) {?><div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header h3">Brand Master</h1>
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
									<tr class="{{!smartrackform.brand_name.$valid && smartrackform.brand_name.$dirty ? 'has-error' : ''}}">
									<td><label class="control-label" for="brand_name">Brand Name</label></td>
									<td>
										<input type="text" name="brand_name" ng-model="itemNameModel" id="brand_name" class="form-control" ng-required=true>
										<input type="hidden" ng-model="itemIdModel" id="brand_id">
										<input type="hidden" ng-model="row_index" id="row_index">
										
									</td>
									</tr>
									<tr class="{{!smartrackform.description.$valid && smartrackform.description.$dirty ? 'has-error' : ''}}">
									<td><label class="control-label" for="description">Description</label></td>
									<td><textarea name="description" id="description" class="form-control" ng-model="itemDescModel" ng-required=true></textarea></td>
									</tr>
									
								</tbody>
							</table>
							<div class="panel-body">
							<button class="btn btn-default" type="reset" ng-click="buttonTxt='Add'">Clear</button> 
							<button class="btn btn-success {{smartrackform.$valid ? '' : 'disabled'}}" ng-click="postRecord('m_brand')">{{buttonTxt}}</button>
							<button ng-show="buttonTxt=='Update'" class="btn btn-danger {{smartrackform.$valid ? '' : 'disabled'}} {{buttonTxt=='Add' ? 'ng-hide' : ''}}" ng-click="voidRecord('m_brand')">Delete</button> 							
							
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
						<input type="text" class="form-control input-sm" placeholder="Search" ng-model="brandListSearchTxt">
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
					
					<tr ng-repeat="item in masterItemsList | filter:brandListSearchTxt" ng-click="editListItem($index)">
					<td>{{$index+1}}</td>
					<td><span class="glyphicon glyphicon-pencil"></span></td>
					<td>{{item.item_name}}</td>
					<td>{{item.item_desc}}</td>
					</tr>
				</tbody></table>				
			</div>
				<ul class="pagination">
				<li class="disabled"><a href="#">�</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">�</a></li>
				</ul>
		</div>
		</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->
<?php }} ?>
