<?php /* Smarty version Smarty-3.1.16, created on 2014-02-14 11:57:44
         compiled from "/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151183503552fa4e4e664154-44504322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b360b301c40273a6fb3ec13f4ac19807f91308b' => 
    array (
      0 => '/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/login.tpl',
      1 => 1392357286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151183503552fa4e4e664154-44504322',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fa4e4e667d71_23827543',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fa4e4e667d71_23827543')) {function content_52fa4e4e667d71_23827543($_smarty_tpl) {?><!DOCTYPE html>
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
