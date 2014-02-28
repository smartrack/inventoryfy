<?php /* Smarty version Smarty-3.1.16, created on 2014-02-15 17:57:32
         compiled from "C:\Apache Group\Apache2.2\htdocs\smartrack\includes\Smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1885852fff0dc3406d1-07734514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d5b193548621ca0af0b5f8c3961aa635cb7aa73' => 
    array (
      0 => 'C:\\Apache Group\\Apache2.2\\htdocs\\smartrack\\includes\\Smarty\\templates\\index.tpl',
      1 => 1392494491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1885852fff0dc3406d1-07734514',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52fff0dc4bf425_53999165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52fff0dc4bf425_53999165')) {function content_52fff0dc4bf425_53999165($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("left_side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
