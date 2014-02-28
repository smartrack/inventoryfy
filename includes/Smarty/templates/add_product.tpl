<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h4 class="page-header">Product Master</h4>
			<div class="alert {literal}{{alertBoxClass}}{/literal}" ng-init="alertBoxClass='hidden'"></div>
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
							<button class="btn btn-primary" ng-click="postRecord('m_product')">{literal}{{buttonTxt}}{/literal}</button> 
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
					<td>{literal}{{$index+1}}{/literal}</td>
					<td><span class="glyphicon glyphicon-pencil"></span></td>
					<td>{literal}{{item.item_name}}{/literal}</td>
					<td>{literal}{{item.item_desc}}{/literal}</td>
					</tr>
				</tbody></table>				
			</div>
		</div>
		</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->
