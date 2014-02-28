<?php /* Smarty version Smarty-3.1.16, created on 2014-02-14 11:44:02
         compiled from "/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/add_units.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139375212652fdb42a056001-81863276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fc7bf5400503a834d18db4ca04e1e7fe896a42c' => 
    array (
      0 => '/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/add_units.tpl',
      1 => 1392357290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139375212652fdb42a056001-81863276',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fdb42a0ddf91_79839777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fdb42a0ddf91_79839777')) {function content_52fdb42a0ddf91_79839777($_smarty_tpl) {?><div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12"><h4 class="page-header">Units Master</h4></div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row"  style="width:600px;">
		<div class="col-lg-12">
			<div class="panel panel-info">
				<div class="panel-heading">Add items</div>
					<form class="bs-example form-horizontal">
						<fieldset>
							<legend style="display:none">Create items</legend>
							<table class="table">
								<tbody>
									<tr>
									<td><label  for="inputCustomerName">Unit Name</label></td>
									<td><input type="text" id="unit_name" class="form-control"></td>
									</tr>
									<tr>
									<td><label  for="inputCustomerName">Items per Unit</label></td>
									<td><input type="text" id="items_per_unit" class="form-control"></td>
									</tr>
									<tr>
									<td><label  for="inputProductName">Description</label></td>
									<td><textarea id="description" class="form-control"></textarea></td>
									</tr>
								</tbody>
							</table>
							<div class="panel-body">
							<button class="btn btn-primary" type="submit">Add</button> 
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	<div class="row">
	<div class="col-lg-12">
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
			<th>Prodct Name</th>
			<th>Items per unit</th>
			<th>Description</th>
			</tr>
			<tr>
			<td>1</td>
			<td><span class="glyphicon glyphicon-pencil"></span></td>
			<td>Mobile</td>
			<td>Mobile</td>
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
