<?php /* Smarty version Smarty-3.1.16, created on 2014-02-14 00:58:26
         compiled from "/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/add_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197251029652fd1cda18a579-44431474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb6267e2574e272151fc680408798c82969099e2' => 
    array (
      0 => '/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/add_product.tpl',
      1 => 1392319641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197251029652fd1cda18a579-44431474',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fd1cda201250_40973608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fd1cda201250_40973608')) {function content_52fd1cda201250_40973608($_smarty_tpl) {?><div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12"><h4 class="page-header">Product Master</h4></div>
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
									<td><label  for="inputCustomerName">Product Name</label></td>
									<td><input type="text" id="brand_name" class="form-control"></td>
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
			<th>Description</th>
			</tr>
			<tr>
			<td>1</td>
			<td><span class="glyphicon glyphicon-pencil"></span></td>
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
