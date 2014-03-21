<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header h3">Units Master</h1>
			<div class="alert {literal}{{alertBoxClass}}{/literal}" ng-init="alertBoxClass='hidden'"></div>
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
							<button class="btn btn-primary {literal}{{smartrackform.$valid ? '' : 'disabled'}}{/literal}" ng-click="postRecord('m_units')">{literal}{{buttonTxt}}{/literal}</button> 
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
				<td>{literal}{{$index+1}}{/literal}</td>
				<td><span class="glyphicon glyphicon-pencil"></span></td>
				<td>{literal}{{item.item_name}}{/literal}</td>
				<td>{literal}{{item.item_desc}}{/literal}</td>
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
