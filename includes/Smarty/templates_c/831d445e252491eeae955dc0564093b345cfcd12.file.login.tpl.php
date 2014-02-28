<?php /* Smarty version Smarty-3.1.16, created on 2014-02-15 17:56:59
         compiled from "C:\Apache Group\Apache2.2\htdocs\smartrack\includes\Smarty\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3228252fff0bb6bf722-86328497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '831d445e252491eeae955dc0564093b345cfcd12' => 
    array (
      0 => 'C:\\Apache Group\\Apache2.2\\htdocs\\smartrack\\includes\\Smarty\\templates\\login.tpl',
      1 => 1392494489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3228252fff0bb6bf722-86328497',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fff0bba324f3_79576093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fff0bba324f3_79576093')) {function content_52fff0bba324f3_79576093($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keyword" content="inteventoryfy, inventory management software, inventory management tool, stock management, electronic stock, mobile inventory management">
	<meta name="description" content="Online tool to manage inventory smarter than ever before with well organized fashion.">
	<meta name="author" content="">
	<link rel="shortcut icon" href="../../assets/ico/favicon.ico">

	<title>Inventoryfy -- Login screen</title>

	<!-- Bootstrap core CSS 
	<link href="css/cerulean/bootstrap.min.css" rel="stylesheet">-->
	<link href="css/united/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/main.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<?php if ($_GET['a']=="login") {?>
	<?php if ($_GET['b']=="f") {?>
		<script type="text/javascript">alert('Invalid Login Credentials');</script>
	<?php } elseif ($_GET['b']=="sto") {?>
		<script type="text/javascript">alert('Your Session Timedout.');</script>
	<?php }?>
<?php }?>
<body class="login-screen">
	<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<h1 class="product-name"><span class="glyphicon glyphicon-list-alt"></span><span class="glyphicon glyphicon-ok"></span>Inventoryfy</h1>
		</div>
	<div class="jumbotron">
		<div class="container">
			<form class="form-signin" role="form" action="index.php?a=P&b=login" method="post">
				<h2 class="form-signin-heading">Please sign in</h2>
				<input name="user_id" type="text" class="form-control" placeholder="User ID" required autofocus>
				<input name="password" type="password" class="form-control" placeholder="Password" required>
				<input name="company_id" type="text" class="form-control" placeholder="Company ID" required>
				<label class="checkbox">
				<input type="checkbox" value="remember-me"> Remember me</label>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
		</div> <!-- /container -->
	</div>
	<div class="footer">
		<p>Powered By <a href="http://www.hostmasterzone.com" target="_blank">www.hostmasterzone.com</a> &copy;  2014</p>
	</div>
	</div> <!-- /container -->
</body>
</html><?php }} ?>
