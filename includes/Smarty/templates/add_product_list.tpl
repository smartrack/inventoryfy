<div id="page-wrapper">
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
					{foreach from=$inv->get_products() item=item_product name=item}
						<option id="{$item_product.id}"> {$item_product.product_name} </option>
					{foreachelse}
						<option id="0">No Products Found</option>
					{/foreach}
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
					{foreach from=$inv->get_brands() item=item_brand name=item}
						<option id="{$item_brand.id}"> {$item_brand.brand_name} </option>
					{foreachelse}
						<option id="0">No Brand Found</option>
					{/foreach}
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
					{foreach from=$inv->get_units() item=item_unit name=item}
						<option id="{$item_units.id}"> {$item_units.unit_name} </option>
					{foreachelse}
						<option id="0">No Unit Found</option>
					{/foreach}
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
