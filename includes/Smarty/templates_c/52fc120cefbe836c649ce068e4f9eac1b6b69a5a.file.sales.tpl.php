<?php /* Smarty version Smarty-3.1.16, created on 2014-02-14 22:01:54
         compiled from "/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/sales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111935307452fa57e2c77a32-53392268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52fc120cefbe836c649ce068e4f9eac1b6b69a5a' => 
    array (
      0 => '/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/sales.tpl',
      1 => 1392357291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111935307452fa57e2c77a32-53392268',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fa57e2d08a49_46538290',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fa57e2d08a49_46538290')) {function content_52fa57e2d08a49_46538290($_smarty_tpl) {?>
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
					<input type="text" id="inputCustomerName" class="form-control">					 
				  </td>
                  <td>				 
						<select id="inputProductName" class="form-control">
							<option>Nokia</option>
							<option>Samsung</option>
							<option>Motorola</option>
							<option>Sony</option>
							<option>LG</option>
							<option>Apple</option>
							<option>HTC</option>
							<option>BlackBerry</option>
							<option>HP</option>
							<option>Huawei</option>
							<option>Acer</option>
							<option>Asus</option>
							<option>Alcatel</option>
							<option>Vodafone</option>
							<option>T-Mobile</option>
							<option>Toshiba</option>
							<option>Gigabyte</option>
							<option>Pantech</option>
							<option>ZTE</option>
							<option>Xolo</option>
							<option>Micromax</option>
							<option>BLU</option>
							<option>Spice</option>
							<option>Karbonn</option>
							<option>Prestigio</option>
							<option>verykool</option>
							<option>Unnecto</option>
							<option>Maxwest</option>
							<option>Celkon</option>
							<option>NIU</option>
							<option>Yezz</option>
							<option>Parla</option>
							<option>Plum</option> 				 
					</div>				  
				  </td>
                  <td>
                      <input type="text" id="inputPurchaseDate" class="form-control">
				  </td>
                  <td class="col-lg-2">
					  <div class="input-group">
                      <input type="text" id="inputProductPrice" class="form-control">
					  <span class="input-group-addon">&#8377;</span>
					  </div>
				  </td>
                  <td>
                      <input type="text" id="Quantity" class="form-control">
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
                <tr>
                  <td>2</td>
                  <td><span class="glyphicon glyphicon-pencil"></span></td>
                  <td>Nokia Dharmapuri</td>
                  <td>Mobile</td>
                  <td>15-Jan-2014</td>
                  <td>15,000</td>
                  <td>15</td>
                </tr>
                <tr>
                  <td>3</td>
				  <td><span class="glyphicon glyphicon-pencil"></span></td>
                  <td>Nokia Dharmapuri</td>
                  <td>Mobile</td>
                  <td>15-Jan-2014</td>
                  <td>15,000</td>
                  <td>15</td>
                </tr>
                <tr>
                  <td>4</td>
				  <td><span class="glyphicon glyphicon-pencil"></span></td>
                  <td>Nokia Dharmapuri</td>
                  <td>Mobile</td>
                  <td>15-Jan-2014</td>
                  <td>15,000</td>
                  <td>15</td>
                </tr>
                <tr>
                  <td>5</td>
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
		<?php }} ?>
