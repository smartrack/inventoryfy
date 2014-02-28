<?php /* Smarty version Smarty-3.1.16, created on 2014-02-15 17:57:32
         compiled from "C:\Apache Group\Apache2.2\htdocs\smartrack\includes\Smarty\templates\dash_board.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1248952fff0dc905127-57976534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e29349208edccdc424b54bb8960c21b7172b4c66' => 
    array (
      0 => 'C:\\Apache Group\\Apache2.2\\htdocs\\smartrack\\includes\\Smarty\\templates\\dash_board.tpl',
      1 => 1392494493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1248952fff0dc905127-57976534',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fff0dc9a9252_93701449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fff0dc9a9252_93701449')) {function content_52fff0dc9a9252_93701449($_smarty_tpl) {?>        <div id="page-wrapper">
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
