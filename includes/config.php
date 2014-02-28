<?php

	// DB configurations
	define('DB_HOST','localhost');
	define('DB_USER_NAME','hostmast_admin');
	define('DB_PASSWORD','Inventory@HMZ');
	define('DB','inventrify');
	
	//Site Global Configurations
	define('SITE_ROOT',getcwd());
	define('APP_PATH',getcwd());
	define('WEB_ROOT',getcwd().'/includes/smarty/templates');
	
	//Smarty Configurations
	require('smarty/libs/Smarty.class.php');

	echo "pwd".getcwd();
	$smarty = new Smarty();
	$smarty->template_dir = SITE_ROOT.'/includes/smarty/templates';
	$smarty->compile_dir = SITE_ROOT.'/includes/smarty/templates_c';
	$smarty->cache_dir = SITE_ROOT.'/includes/smarty/cache';
	$smarty->config_dir = SITE_ROOT.'/includes/smarty/configs';
	$smarty->assign('APP_PATH',APP_PATH);
?>
