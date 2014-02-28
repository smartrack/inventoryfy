<?php /* Smarty version Smarty-3.1.16, created on 2014-02-14 11:24:58
         compiled from "/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76159947752f9c03d56df25-34222821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65495e7f0926fd4d111a7bb68b510339235f7a2b' => 
    array (
      0 => '/home/hostmast/public_html/inventoryfy/includes/Smarty/templates/index.tpl',
      1 => 1392357286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76159947752f9c03d56df25-34222821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f9c03d625882_39110722',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f9c03d625882_39110722')) {function content_52f9c03d625882_39110722($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("left_side_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['content']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
