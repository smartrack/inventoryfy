		<link href="css/datepicker.css" rel="stylesheet">
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<!--
		<script src="js/jqBootstrapValidation.js"></script>
		-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inventory Master</h1>					
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-12">
            <div class="panel panel-info">
			  <div class="panel-heading">Add items</div>
              <form class="bs-example form-horizontal">
                <fieldset>
                  <legend style="display:none">Create items</legend>
				<table class="table">
                <tbody><tr>
                  <th><label  for="brand_list_name">Brand</label></th>
                  <th><label  for="product_list_name">Product</label></th>
                  <th><label  for="item_name">Item Name</label></th>
                  <th><label  for="purchase_date">Date</label></th>
                  <th><label  for="product_buy_price">Buy Price</label></th>
                  <th><label  for="product_sell_price">Sell Price</label></th>
                  <th><label  for="item_qty">Quantity</label></th>
                </tr>
                <tr>
                  <td>
					<select id="brand_list_id" class="form-control" ng-model="brand_id" ng-required="true" ng-options="brand.label for brand in brandDropdownList">						
					</select>	
					
				  </td>
                  <td>				 
					<select id="product_list_id" class="form-control" ng-required="true" ng-model="prod_id" ng-options="prod.label for prod in productDropdownList" >
						
					</select> 
				  </td>
                  <td>
                      <input type="text" id="item_name" class="form-control" ng-required="true" maxlength="30" minlength="3" ng-model="prod_name">
					  <input type="hidden" ng-model="inv_item_id" id="inv_item_id"><input type="hidden" ng-model="row_index" id="row_index"></td>
				  </td>
                  <td class="col-lg-2">
					   <div class="input-group date">
						<input type="text" class="form-control date-picker" id="purchase_date" ng-model="purchase_date">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					  </div>
				  </td>
                  <td class="col-lg-2">				  
					  <div class="input-group">
                      <input type="number" id="product_buy_price" class="form-control" ng-required="true" maxlength="6" minlength="1" ng-model="buy_price">
					  <span class="input-group-addon">&#8377;</span>
					  <p class="help-block"></p>
					  </div>
				  </td>
                  <td class="col-lg-2">				  
					  <div class="input-group">
                      <input type="number" id="product_sell_price" class="form-control" ng-required="true" maxlength="6" minlength="1" ng-model="sell_price">
					  <span class="input-group-addon">&#8377;</span>
					  <p class="help-block"></p>
					  </div>
				  </td>
                  <td class="col-lg-1">
                      <input type="number" id="item_qty" class="form-control" ng-required="true" maxlength="4" minlength="1" ng-model="prod_qty">
					  <p class="help-block"></p>
				  </td>
                </tr>
				</tbody>
				</table>
                  <div class="panel-body">
                      <button class="btn btn-default" type="reset">Cancel</button> 
                      <button class="btn btn-primary" ng-click="postRecord('m_inv')">{literal}{{buttonTxt}}{/literal}</button> 
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
                  <th>Purchase Date</th>
                  <th>Buy Price</th>
                  <th>Sell Price</th>
                  <th>Quantity</th>
                </tr>
				
				<tr ng-repeat="item in inventoryItemList | filter:inventorySearchTxt" ng-click="editListItem($index,'inventoryItemList')">
					<td>{literal}{{$index+1}}{/literal}</td>
					<td><span class="glyphicon glyphicon-pencil"></span></td>
					<td>{literal}{{item.brand_name}}{/literal}</td>
					<td>{literal}{{item.prod_name}}{/literal}</td>
					<td>{literal}{{item.purchase_date | date : date : 'fullDate'}}{/literal}</td>
					<td>{literal}{{item.buy_price}}{/literal}</td>
					<td>{literal}{{item.sell_price}}{/literal}</td>
					<td>{literal}{{item.prod_qty}}{/literal}</td>
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
		