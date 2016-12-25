<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:57
         compiled from "/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1572417624585ead116313a4-24796989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b109a8e4af366823a3de9a73b2879b29ab41c09' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_addstock.tpl',
      1 => 1482598375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1572417624585ead116313a4-24796989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead116414b8_10296450',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead116414b8_10296450')) {function content_585ead116414b8_10296450($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
