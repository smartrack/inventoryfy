<?php /* Smarty version Smarty-3.1.16, created on 2014-02-14 11:24:58
         compiled from "/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/dash_board.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59469075752fd1cd38428d5-45242557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f56e7130b4884cae42d035dc1547ed379129baf5' => 
    array (
      0 => '/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/dash_board.tpl',
      1 => 1392357289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59469075752fd1cd38428d5-45242557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fd1cd38ba9a6_81272122',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fd1cd38ba9a6_81272122')) {function content_52fd1cd38ba9a6_81272122($_smarty_tpl) {?>        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Daily Sales Report
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Filter
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">By Product</a>
                                        </li>
                                        <li><a href="#">By Price</a>
                                        </li>
                                        <li><a href="#">By Customer</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">By Dealer</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Recent Order 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bars fa-fw"></i> Nokia Lumia - Saravanan
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bars fa-fw"></i> Samsung Galaxy - Ashok
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bars fa-fw"></i> Nokia Battery - Kumar
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bars fa-fw"></i> Nokia Charger - Arul
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bars fa-fw"></i> 4GB SD Memory Card - Mani
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn btn-primary btn-block">View All Items</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Stock list
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Stock Qty</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Samsung</td>
                                            <td><span class="badge">42</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Motorolla</td>
                                            <td><span class="badge">12</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Nokia</td>
                                            <td><span class="badge">22</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
		<?php }} ?>
