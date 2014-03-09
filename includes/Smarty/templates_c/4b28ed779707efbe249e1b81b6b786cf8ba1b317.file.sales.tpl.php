<?php /* Smarty version Smarty-3.1.16, created on 2014-03-09 00:25:30
         compiled from "C:\Apache Group\Apache2.2\htdocs\smartrack\includes\Smarty\templates\sales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113545302c7cb21ae01-34469612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b28ed779707efbe249e1b81b6b786cf8ba1b317' => 
    array (
      0 => 'C:\\Apache Group\\Apache2.2\\htdocs\\smartrack\\includes\\Smarty\\templates\\sales.tpl',
      1 => 1394299806,
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
                    <h1 class="page-header h3">Sales Order</h1>					
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-12">
            <div class="panel panel-info">
			  <div class="panel-heading">Add Sales Order</div>
              <form class="bs-example form-horizontal" name="smartrackform">
                <fieldset>
                  <legend style="display:none">Create Sales Order</legend>
				<table class="table">
                <tbody><tr>
                  <th><label  for="customer_name">Customer</label></th>
                  <th><label  for="inv_id">Product Name</label></th>
                  <th><label  for="selling_date">Date</label></th>
                  <th><label  for="selling_price">Price</label></th>
                  <th><label  for="selling_qty">Quantity</label></th>
                  <th><label  for="comments">Comments</label></th>
                </tr>
                <tr>
                  <td>
					<input type="text" id="customer_name" class="form-control" ng-model="customer_name" ng-required="true">					 
				  </td>
                  <td>	
					<select id="inv_id" ng-required="true" class="form-control" ng-model="inv_id" ng-required="true" ng-options="inv.label for inv in invDropdownList" ng-change="prefillsalesrow()">						
					</select>				  
				  </td>
                   <td class="col-lg-2">
					   <div class="input-group date">
						<input type="text" class="form-control date-picker" id="selling_date" ng-model="selling_date" data-date-format="dd-mm-yyyy">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					  </div>
				  </td>
                  <td class="col-lg-2">
					  <div class="input-group">
                      <input type="number" id="selling_price" class="form-control" ng-model="selling_price" ng-required="true">
					  <span class="input-group-addon">&#8377;</span>
					  </div>
				  </td>
                  <td class="col-lg-2">
                      <input type="number" id="selling_qty" class="form-control" ng-model="selling_qty" ng-required="true">
				  </td>
                  <td>
                      <textarea id="comments" class="form-control" ng-model="comments"></textarea>
				  </td>
                </tr>
				</tbody>
				</table>
                  <div class="panel-body">
                      <button class="btn btn-info" type="reset">Cancel</button> 
                      <button class="btn btn-primary {{smartrackform.$valid ? '' : 'disabled'}}" ng-click="postRecord('m_sales')">Submit</button> 
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
						<input type="text" class="form-control input-sm" placeholder="Search" ng-model="soSearchTxt">
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
				
				<tr ng-repeat="item in salesOrderList | filter:soSearchTxt" ng-click="editListItem($index,'salesOrderList')" ng-init="salesOrderList=[]">
					<td>{{$index+1}}</td>
					<td><span class="glyphicon glyphicon-pencil"></span></td>
					<td>{{item.customer_name}}</td>
					<td>{{item.inv_name}}</td>
					<td>{{item.sell_date | date : date : 'yyyy-MM-dd HH:mm:ss Z'}}</td>
					<td>{{item.selling_price}}</td>
					<td>{{item.selling_qty}}</td>
					<td>{{item.comments}}</td>
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
			//setTimeout(function(){
			$('#selling_date').datepicker();//
			/*
			{
				format: 'mm-dd-yyyy'
			})
			.datepicker('setValue', new Date())
			.on('changeDate blur',function(e){
				$(this).datepicker('hide');
				console.log(e);
			});
			//},1000);*/
			setTimeout(function(){
				$('#selling_date').datepicker('setValue', new Date())
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
		<?php }} ?>
