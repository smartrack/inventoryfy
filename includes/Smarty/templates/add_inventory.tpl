		<link href="css/datepicker.css" rel="stylesheet">
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<!--
		<script src="js/jqBootstrapValidation.js"></script>
		-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header h3">Inventory Master</h1>
					<div class="alert {literal}{{alertBoxClass}}{/literal}" ng-init="alertBoxClass='hidden'"></div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-12">
            <div class="panel panel-info">
			  <div class="panel-heading">{literal}{{buttonTxt}}{/literal} items</div>
              <form class="form-horizontal" name="smartrackform">
                <fieldset>
                  <legend style="display:none">Create items</legend>
				<table class="table">
                <tbody><tr>
                  <th class="{literal}{{!smartrackform.brand_list_name.$valid && smartrackform.brand_list_name.$dirty ? 'has-error' : ''}}{/literal}">
					<label class="control-label" for="brand_list_name">Brand</label>
				  </th>
                  <th class="{literal}{{!smartrackform.product_list_name.$valid && smartrackform.product_list_name.$dirty ? 'has-error' : ''}}{/literal}">
					<label class="control-label" for="product_list_name">Product</label>
				  </th>
                  <th class="{literal}{{!smartrackform.item_name.$valid && smartrackform.item_name.$dirty ? 'has-error' : ''}}{/literal}">
					<label class="control-label" for="item_name">Item Name</label>
				  </th>
                  <th class="{literal}{{!smartrackform.purchase_date.$valid && smartrackform.purchase_date.$dirty ? 'has-error' : ''}}{/literal}">
					<label class="control-label" for="purchase_date">Date</label>
				  </th>
                  <th class="{literal}{{!smartrackform.product_buy_price.$valid && smartrackform.product_buy_price.$dirty ? 'has-error' : ''}}{/literal}">
					<label class="control-label" for="product_buy_price">Buy Price</label>
				  </th>
                  <th class="{literal}{{!smartrackform.product_sell_price.$valid && smartrackform.product_sell_price.$dirty ? 'has-error' : ''}}{/literal}">
					<label class="control-label" for="product_sell_price">Sell Price</label>
				  </th>
                  <th class="{literal}{{!smartrackform.item_qty.$valid && smartrackform.item_qty.$dirty ? 'has-error' : ''}}{/literal}">
					<label class="control-label" for="item_qty">Quantity</label>
				  </th>
                </tr>
                <tr>
                  <td class="{literal}{{!smartrackform.brand_list_name.$valid && smartrackform.brand_list_name.$dirty ? 'has-error' : ''}}{/literal}">
					<select name="brand_list_id" id="brand_list_id" class="form-control" ng-model="brand_id" ng-required="true" ng-options="brand.label for brand in brandDropdownList">						
					</select>						
				  </td>
                  <td class="{literal}{{!smartrackform.product_list_name.$valid && smartrackform.product_list_name.$dirty ? 'has-error' : ''}}{/literal}">				 
					<select name="product_list_id" id="product_list_id" class="form-control" ng-required="true" ng-model="prod_id" ng-options="prod.label for prod in productDropdownList" >						
					</select> 
				  </td>
                  <td class="{literal}{{!smartrackform.item_name.$valid && smartrackform.item_name.$dirty ? 'has-error' : ''}}{/literal}">
                      <input type="text" name="item_name" id="item_name" class="form-control" ng-required="true" maxlength="30" minlength="3" ng-model="item_name">
					  <input type="hidden" ng-model="inv_item_id" id="inv_item_id">
					  <input type="hidden" ng-model="row_index" id="row_index">
				  </td>
				  </td>
                  <td class="{literal}{{!smartrackform.purchase_date.$valid && smartrackform.purchase_date.$dirty ? 'has-error col-lg-2' : 'col-lg-2'}}{/literal}">
					   <div class="input-group date">
						<input type="text" class="form-control date-picker" name="purchase_date" id="purchase_date" ng-model="purchase_date">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					  </div>
				  </td>
                  <td class="{literal}{{!smartrackform.product_buy_price.$valid && smartrackform.product_buy_price.$dirty ? 'has-error col-lg-2' : 'col-lg-2'}}{/literal}">				  
					  <div class="input-group">
                      <input type="number" id="product_buy_price" name="product_buy_price" class="form-control" ng-required="true" maxlength="6" minlength="1" ng-model="buy_price">
					  <span class="input-group-addon">&#8377;</span>
					  <p class="help-block"></p>
					  </div>
				  </td>
                  <td class="{literal}{{!smartrackform.product_sell_price.$valid && smartrackform.product_sell_price.$dirty ? 'has-error col-lg-2' : 'col-lg-2'}}{/literal}">				  
					  <div class="input-group">
                      <input type="number" id="product_sell_price" name="product_sell_price" class="form-control" ng-required="true" maxlength="6" minlength="1" ng-model="sell_price">
					  <span class="input-group-addon">&#8377;</span>
					  <p class="help-block"></p>
					  </div>
				  </td>
                  <td class="{literal}{{!smartrackform.item_qty.$valid && smartrackform.item_qty.$dirty ? 'has-error col-lg-1' : 'col-lg-1'}}{/literal}">
                      <input type="number" id="item_qty" name="item_qty" class="form-control" ng-required="true" maxlength="4" minlength="1" ng-model="prod_qty">
					  <p class="help-block"></p>
				  </td>
                </tr>
				</tbody>
				</table>
                  <div class="panel-body">
                      <button class="btn btn-default" ng-click="formreset()">Cancel</button> 
                      <button class="btn btn-success {literal}{{smartrackform.$valid ? '' : 'disabled'}}{/literal}" ng-click="postRecord('m_inv')">{literal}{{buttonTxt}}{/literal}</button> 
					  <button ng-show="buttonTxt=='Update'" class="btn btn-danger {literal}{{smartrackform.$valid ? '' : 'disabled'}}{/literal} {literal}{{buttonTxt=='Add' ? 'ng-hide' : ''}}{/literal}" ng-click="voidRecord('m_inv')">Delete</button>					  
						
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
						<h5 class="pull-left">Inventory List</h5>
						<div class="col-xs-4 col-md-offset-1">
						<input type="text" class="form-control input-sm" placeholder="Search" ng-model="inventorySearchTxt">
						</div>
					<div class="clearfix"></div>
				</div>
				<table class="table table-striped table-hover ">
                <tbody><tr>
                  <th>#</th>
                  <th>Edit</th>
                  <th>Brand Name</th>
                  <th>Product Name</th>
                  <th>Item Name</th>
                  <th>Purchase Date</th>
                  <th>Buy Price</th>
                  <th>Sell Price</th>
                  <th>Quantity</th>
                </tr>
				
				<tr ng-repeat="item in inventoryItemList | filter:inventorySearchTxt" ng-click="editListItem($index,'inventoryItemList')" class="{literal}{{item.class}}{/literal}">
					<td>{literal}{{$index+1}}{/literal}</td>
					<td><span class="glyphicon glyphicon-pencil"></span></td>
					<td>{literal}{{item.brand_name}}{/literal}</td>
					<td>{literal}{{item.prod_name}}{/literal}</td>
					<td>{literal}{{item.item_name}}{/literal}</td>
					<td>{literal}{{item.purchase_date | date : date : 'fullDate'}}{/literal}</td>
					<td>{literal}{{item.buy_price}}{/literal}</td>
					<td>{literal}{{item.sell_price}}{/literal}</td>
					<td>{literal}{{item.prod_qty}}{/literal}</td>
					</tr>
					
				</tbody></table>				
				</div>
			</div>
			</div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
		<script>
		$(document).ready(function(){
			setTimeout(function(){
			$('#purchase_date').datepicker({
				format: 'mm-dd-yyyy'
			})
			.datepicker('setValue', new Date())
			.on('changeDate',function(e){
				$(this).datepicker('hide');				
			});
			},1000);
			
			$("input").filter(function(){ return $(this).attr('type') == 'number' }).keyup(function(){
				
				var $this = $(this);
				var $thisVal = $this.val();
				var $len = $thisVal.length;
				var num = '';
				for(var str = 0; str < $len;str++){
					
					if(!isNaN($thisVal.charAt(str))){
						num += $thisVal.charAt(str);
					}
				}
				$this.val(num);
			});
			
		});
		</script>
		