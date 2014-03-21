		<link href="css/datepicker.css" rel="stylesheet">
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/bootstrap.touchspin.js"></script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header h3">Sales Order</h1>	
					<div class="alert {literal}{{alertBoxClass}}{/literal}" ng-init="alertBoxClass='hidden'"></div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-12">
            <div class="panel panel-info">
			  <div class="panel-heading">{literal}{{buttonTxt}}{/literal} Sales Order</div>
              <form class="bs-example form-horizontal" name="smartrackform">
                <fieldset>
                  <legend style="display:none">Create Sales Order</legend>
				<table class="table">
                <tbody><tr>
                  <th class="{literal}{{!smartrackform.inv_id.$valid && smartrackform.inv_id.$dirty ? 'has-error' : ''}}{/literal}"><label  for="inv_id">Product Name</label></th>
				  <th class="{literal}{{!smartrackform.customer_name.$valid && smartrackform.customer_name.$dirty ? 'has-error' : ''}}{/literal}"><label  for="customer_name">Customer</label></th>                  
                  <th class="{literal}{{!smartrackform.selling_date.$valid && smartrackform.selling_date.$dirty ? 'has-error' : ''}}{/literal}"><label  for="selling_date">Date</label></th>
                  <th class="{literal}{{!smartrackform.selling_price.$valid && smartrackform.selling_price.$dirty ? 'has-error' : ''}}{/literal}"><label  for="selling_price">Price</label></th>
                  <th class="{literal}{{!smartrackform.selling_qty.$valid && smartrackform.selling_qty.$dirty ? 'has-error' : ''}}{/literal}"><label  for="selling_qty">Quantity</label></th>
                  <th><label for="comments">Comments</label></th>
                </tr>
                <tr>
                  <td class="{literal}{{!smartrackform.inv_id.$valid && smartrackform.inv_id.$dirty ? 'has-error' : ''}}{/literal}">	
					<select id="inv_id" name="inv_id" ng-required="true" class="form-control" ng-model="inv_id" ng-required="true" ng-options="inv.label for inv in invDropdownList" ng-change="prefillsalesrow()">						
					</select>				  
				  </td>
                  <td class="{literal}{{!smartrackform.customer_name.$valid && smartrackform.customer_name.$dirty ? 'has-error' : ''}}{/literal}">
					<input type="text" name="customer_name" id="customer_name" class="form-control" ng-model="customer_name" ng-required="true">	
					<input type="hidden" ng-model="row_index" id="row_index">
					<input type="hidden" ng-model="so_id" id="so_id">
				  </td>
                   <td class="col-lg-2">
					   <div class="input-group date">
						<input type="date" class="form-control date-picker" id="selling_date" name="selling_date" ng-model="selling_date">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					  </div>
				  </td>
                  <td class="{literal}{{!smartrackform.selling_price.$valid && smartrackform.selling_price.$dirty ? 'has-error col-lg-2' : 'col-lg-2'}}{/literal}">
					  <div class="input-group">
                      <input type="number" id="selling_price" name="selling_price" class="form-control" ng-model="selling_price" ng-required="true">
					  <span class="input-group-addon">&#8377;</span>
					  </div>
				  </td>
                  <td class="{literal}{{!smartrackform.selling_qty.$valid && smartrackform.selling_qty.$dirty ? 'has-error col-lg-2' : 'col-lg-2'}}{/literal}">
                      <input type="number" id="selling_qty" name="selling_qty" class="form-control" ng-model="selling_qty" ng-required="true">
				  </td>
                  <td>
                      <textarea id="comments" name="comments" class="form-control" ng-model="comments"></textarea>
				  </td>
                </tr>
				</tbody>
				</table>
                  <div class="panel-body">                      
                      <button class="btn btn-success {literal}{{smartrackform.$valid ? '' : 'disabled'}}{/literal}" ng-click="postRecord('m_sales')">{literal}{{buttonTxt}}{/literal}</button> 
					  <button ng-show="buttonTxt=='Update'" class="btn btn-danger {literal}{{smartrackform.$valid ? '' : 'disabled'}}{/literal} {literal}{{buttonTxt=='Add' ? 'ng-hide' : ''}}{/literal}" ng-click="voidRecord('m_sales')">Delete</button>
					  <button class="btn btn-default" ng-click="formreset()">Cancel</button> 
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
						<h5 class="pull-left">Sales List</h5>
						<div class="col-xs-4 col-md-offset-1">
						<input ng-hide="salesOrderList.length < 3" type="text" class="form-control input-sm" placeholder="Search" ng-model="soSearchTxt">
						</div>
					<div class="clearfix"></div>
				</div>
				<table class="table table-striped table-hover ">
                <tbody><tr>
                  <th>#</th>
                  <th>Edit</th>
                  <th>Customer</th>
                  <th>Product Name</th>
                  <th>Date</th>
                  <th>Price</th>
                  <th>Qty</th>
                  <th>Comments</th>
                </tr>
				
				<tr ng-repeat="item in salesOrderList | filter:soSearchTxt" ng-click="editListItem($index,'salesOrderList')" ng-init="salesOrderList=[]" class="{literal}{{item.class}}{/literal}">
					<td>{literal}{{$index+1}}{/literal}</td>
					<td><span class="glyphicon glyphicon-pencil"></span></td>
					<td>{literal}{{item.customer_name}}{/literal}</td>
					<td>{literal}{{item.inv_name}}{/literal}</td>
					<td>{literal}{{item.selling_date | date : date : 'yyyy-MM-dd HH:mm:ss Z'}}{/literal}</td>
					<td>{literal}{{item.selling_price}}{/literal}</td>
					<td>{literal}{{item.selling_qty}}{/literal}</td>
					<td>{literal}{{item.comments}}{/literal}</td>
				</tr>
				<tr class="" ng-show="salesOrderList == 0">
					<td colspan="8" align="center">
						Hurray!!! No Records.
					</td>
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
				$('#selling_date').datepicker({
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
			
			$("#selling_qty").TouchSpin({
                min: 1,
                step: 1,
				initval : 1
            });
			
		});
		</script>
		