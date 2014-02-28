<?php /* Smarty version Smarty-3.1.16, created on 2014-02-23 17:41:07
         compiled from "C:\Apache Group\Apache2.2\htdocs\smartrack\includes\Smarty\templates\left_side_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:440852fff0dc69fc15-34459903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '111efac835fd86be2dde25a59fdb5b353d52d945' => 
    array (
      0 => 'C:\\Apache Group\\Apache2.2\\htdocs\\smartrack\\includes\\Smarty\\templates\\left_side_menu.tpl',
      1 => 1393186003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '440852fff0dc69fc15-34459903',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fff0dc7769c4_64535588',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fff0dc7769c4_64535588')) {function content_52fff0dc7769c4_64535588($_smarty_tpl) {?><nav class="navbar-static-side" role="navigation" >
<div class="sidebar-collapse {{sideBarToggleClass}}">
	<ul class="nav" id="side-menu">
		 <li class="sidebar-search">
			<div class="input-group custom-search-form">
				<input type="text" class="form-control" placeholder="Search..." ng-model="leftMenuSearchTxt">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</li>
		<li ng-repeat="menu in leftMenuItems | filter:leftMenuSearchTxt">
			<a href={{menu.target}} class={{menu.class}}><i class={{menu.icon}}></i> {{menu.name}}</a>
		</li>
	</ul>
<!-- /#side-menu -->
</div>
<!-- /.sidebar-collapse -->
</nav>
<!-- /.navbar-static-side -->
<?php }} ?>
