        <!-- Page-Level Plugin CSS - Morris -->
    <link href="css/plugins/morris-0.4.3.min.css" rel="stylesheet">
	
		<div id="page-wrapper">
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
                                <a href="#" class="list-group-item" ng-repeat="list in topFiveSalesList">
                                    <i class="fa fa-bars fa-fw"></i> {literal}{{list.inv_name}}{/literal} - {literal}{{list.customer_name}}{/literal}
                                    <span class="pull-right text-muted small"><em>{literal}{{list.sell_date | date : date : 'H'}}{/literal}</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="?a=P&b=sales" class="btn btn btn-primary btn-block">View All Items</a>
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
									<tr ng-repeat="list in topFiveInvList">
										<td>{literal}{{$index+1}}{/literal}</td>
										<td>{literal}{{list.prod_name}}{/literal}</td>
										<td><span class="badge">{literal}{{list.prod_qty}}{/literal}</span></td>
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
		<!-- Page-Level Plugin Scripts - Morris -->
	<script src="js/jquery-1.10.2.js"></script>
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>
		