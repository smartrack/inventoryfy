<?php /* Smarty version Smarty-3.1.16, created on 2014-02-14 00:58:28
         compiled from "/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/add_product_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211519281552fd1cdc2438f7-21863924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49196a6392ae5b74ce5b8afaea1736103819517b' => 
    array (
      0 => '/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/add_product_list.tpl',
      1 => 1392319641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211519281552fd1cdc2438f7-21863924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'inv' => 0,
    'item_product' => 0,
    'item_brand' => 0,
    'item_units' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fd1cdc399931_86980135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fd1cdc399931_86980135')) {function content_52fd1cdc399931_86980135($_smarty_tpl) {?><div id="page-wrapper">
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
				<td><label  for="inputCustomerName">Product Type</label></td>
				<td>
					<select id="product_id" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['item_product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inv']->value->get_products(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_product']->key => $_smarty_tpl->tpl_vars['item_product']->value) {
$_smarty_tpl->tpl_vars['item_product']->_loop = true;
?>
						<option id="<?php echo $_smarty_tpl->tpl_vars['item_product']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['item_product']->value['product_name'];?>
 </option>
					<?php }
if (!$_smarty_tpl->tpl_vars['item_product']->_loop) {
?>
						<option id="0">No Products Found</option>
					<?php } ?>
					</select>
				</td>
				</tr>
				<tr>
				<td><label  for="inputProductName">Product Name</label></td>
				<td><input type="text" id="product_name" class="form-control"></td>
				</tr>
				<tr>
				<td><label  for="inputProductName">Product Model</label></td>
				<td><input type="text" id="product_name" class="form-control"></td>
				</tr>
				<tr>
				<td><label  for="inputProductName">Bar Code</label></td>
				<td><input type="text" id="bar_code" class="form-control"></td>
				</tr>
				<tr>
				<td><label  for="inputProductName">Brand Name</label></td>
				<td>
					<select id="brad_id" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['item_brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inv']->value->get_brands(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_brand']->key => $_smarty_tpl->tpl_vars['item_brand']->value) {
$_smarty_tpl->tpl_vars['item_brand']->_loop = true;
?>
						<option id="<?php echo $_smarty_tpl->tpl_vars['item_brand']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['item_brand']->value['brand_name'];?>
 </option>
					<?php }
if (!$_smarty_tpl->tpl_vars['item_brand']->_loop) {
?>
						<option id="0">No Brand Found</option>
					<?php } ?>
					</select>
				</td>
				</tr>
				<tr>
				<td><label  for="inputProductName">Description</label></td>
				<td><textarea id="description" class="form-control"></textarea></td>
				</tr>
				<tr>
				<td><label  for="inputProductName">Buy Price</label></td>
				<td><input type="text" id="bar_code" class="form-control"></td>
				</tr>
				<tr>
				<td><label  for="inputProductName">Sell Price</label></td>
				<td><input type="sell_price" id="bar_code" class="form-control"></td>
				</tr>
				<tr>
				<td><label  for="inputProductName">Buy Unit</label></td>
				<td>
					<select id="buy_unit_id" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['item_unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item_unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inv']->value->get_units(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item_unit']->key => $_smarty_tpl->tpl_vars['item_unit']->value) {
$_smarty_tpl->tpl_vars['item_unit']->_loop = true;
?>
						<option id="<?php echo $_smarty_tpl->tpl_vars['item_units']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['item_units']->value['unit_name'];?>
 </option>
					<?php }
if (!$_smarty_tpl->tpl_vars['item_unit']->_loop) {
?>
						<option id="0">No Unit Found</option>
					<?php } ?>
					</select>
				</td>
				</tr>
				<tr>
				<td><label  for="inputProductName">Product Name</label></td>
				<td><textarea id="product_name" class="form-control"></textarea></td>
				</tr>
				<tr>
				<td><label  for="inputProductName">Product Name</label></td>
				<td><textarea id="product_name" class="form-control"></textarea></td>
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
