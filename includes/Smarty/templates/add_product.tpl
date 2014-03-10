<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header h3">Product Master</h1>
			<div class="alert {literal}{{alertBoxClass}}{/literal}" ng-init="alertBoxClass='hidden'"></div>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-5">
			<div class="panel panel-info">
				<div class="panel-heading">{literal}{{buttonTxt}}{/literal} Product</div>
					<form class="form-horizontal" name="smartrackform">
						<fieldset>
							<legend style="display:none">Create Product</legend>
							<table class="table">
								<tbody>
									<tr class="{literal}{{!smartrackform.product_name.$valid && smartrackform.product_name.$dirty ? 'has-error' : ''}}{/literal}">
									<td><label class="control-label" for="product_name">Product Name</label></td>
									<td>
									<input type="text" name="product_name" ng-model="itemNameModel" id="product_name" class="form-control" ng-required="true">
									<input type="hidden" ng-model="itemIdModel" id="product_id">
									<input type="hidden" ng-model="row_index" id="row_index">
									</td>
									</tr>
									<tr class="{literal}{{!smartrackform.description.$valid && smartrackform.description.$dirty ? 'has-error' : ''}}{/literal}">
									<td><label class="control-label" for="description">Description</label></td>
									<td><textarea id="description" name="description" class="form-control" ng-model="itemDescModel" ng-required="true"></textarea></td>
									</tr>
								</tbody>
							</table>
							<div class="panel-body">
							<button class="btn btn-default" ng-click="formreset()">Clear</button> 
							<button class="btn btn-success {literal}{{smartrackform.$valid ? '' : 'disabled'}}{/literal}" ng-click="postRecord('m_product')">{literal}{{buttonTxt}}{/literal}</button> 
							<button ng-show="buttonTxt=='Update'" class="btn btn-danger {literal}{{smartrackform.$valid ? '' : 'disabled'}}{/literal} {literal}{{buttonTxt=='Add' ? 'ng-hide' : ''}}{/literal}" ng-click="voidRecord('m_product')">Delete</button> 							
							</div>
						</fieldset>
					</form>
				</div>
			</div>
			<div class="col-lg-7">
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
