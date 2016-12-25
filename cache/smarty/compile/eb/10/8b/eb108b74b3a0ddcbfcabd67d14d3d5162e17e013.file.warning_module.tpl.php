<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:39
         compiled from "/home3/admin722/dev/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2110306306585eacffe37b45-62626556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb108b74b3a0ddcbfcabd67d14d3d5162e17e013' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1482598354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2110306306585eacffe37b45-62626556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585eacffe430b0_22015950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585eacffe430b0_22015950')) {function content_585eacffe430b0_22015950($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
