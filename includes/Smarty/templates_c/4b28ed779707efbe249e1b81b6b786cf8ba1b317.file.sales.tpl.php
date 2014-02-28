<?php /* Smarty version Smarty-3.1.16, created on 2014-02-27 23:32:33
         compiled from "C:\Apache Group\Apache2.2\htdocs\smartrack\includes\Smarty\templates\sales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113545302c7cb21ae01-34469612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b28ed779707efbe249e1b81b6b786cf8ba1b317' => 
    array (
      0 => 'C:\\Apache Group\\Apache2.2\\htdocs\\smartrack\\includes\\Smarty\\templates\\sales.tpl',
      1 => 1393561950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113545302c7cb21ae01-34469612',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5302c7cb3015b1_67663521',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5302c7cb3015b1_67663521')) {function content_5302c7cb3015b1_67663521($_smarty_tpl) {?>		<link href="css/datepicker.css" rel="stylesheet">
		<script src="js/jquery-1.10.2.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/bootstrap.touchspin.js"></script>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Sales Order</h1>					
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-12">
            <div class="panel panel-info">
			  <div class="panel-heading">Add Sales Order</div>
              <form class="bs-example form-horizontal">
                <fieldset>
                  <legend style="display:none">Create Sales Order</legend>
				<table class="table">
                <tbody><tr>
                  <th><label  for="inputCustomerName">Customer</label></th>
                  <th><label  for="inputProductName">Product Name</label></th>
                  <th><label  for="inputPurchaseDate">Date</label></th>
                  <th><label  for="inputProductPrice">Price</label></th>
                  <th><label  for="inputProductQty">Quantity</label></th>
                </tr>
                <tr>
                  <td>
					<input type="text" id="inputCustomerName" class="form-control" ng-model="customer_name">					 
				  </td>
                  <td>	
					<select id="inv_list_id" class="form-control" ng-model="inv_id" ng-required="true" ng-options="inv.label for inv in invDropdownList" ng-change="prefillsalesrow()">						
					</select>				  
				  </td>
                   <td class="col-lg-2">
					   <div class="input-group date">
						<input type="text" class="form-control date-picker" id="selling_date" ng-model="selling_date">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					  </div>
				  </td>
                  <td class="col-lg-2">
					  <div class="input-group">
                      <input type="number" id="inputProductPrice" class="form-control" ng-model="selling_price">
					  <span class="input-group-addon">&#8377;</span>
					  </div>
				  </td>
                  <td class="col-lg-2">
                      <input type="text" id="sell_qty" class="form-control" ng-model="selling_qty" value="1">
				  </td>
                </tr>
				</tbody>
				</table>
                  <div class="panel-body">
                      <button class="btn btn-default">Cancel</button> 
                      <button class="btn btn-primary" type="submit">Submit</button> 
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
						<input type="text" class="form-control input-sm" placeholder="Search">
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
                </tr>
                <tr>
                  <td>1</td>
				  <td><span class="glyphicon glyphicon-pencil"></span></td>
                  <td>Nokia Dharmapuri</td>
                  <td>Mobile</td>
                  <td>15-Jan-2014</td>
                  <td>15,000</td>
                  <td>15</td>
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
			$('#selling_date').datepicker({
				format: 'mm-dd-yyyy'
			})
			.datepicker('setValue', new Date())
			.on('changeDate blur',function(e){
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
			$("#sell_qty").TouchSpin({
                min: 1,
                step: 1,
				initval : 1
            });
			
		});
		</script>
		<?php }} ?>
