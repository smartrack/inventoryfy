<!DOCTYPE html>
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
{if $smarty.get.a eq "login"}
	{if $smarty.get.b eq "f"}
		{literal}<script type="text/javascript">alert('Invalid Login Credentials');</script>{/literal}
	{else if $smarty.get.b eq "sto"}
		{literal}<script type="text/javascript">alert('Your Session Timedout.');</script>{/literal}
	{/if}
{/if}
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
</html>