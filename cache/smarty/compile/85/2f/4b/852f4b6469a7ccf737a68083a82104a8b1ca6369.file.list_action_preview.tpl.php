<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:58
         compiled from "/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73789560585ead125a10a6-79026733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '852f4b6469a7ccf737a68083a82104a8b1ca6369' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1482598376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73789560585ead125a10a6-79026733',
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
  'unifunc' => 'content_585ead125b2c49_58852762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead125b2c49_58852762')) {function content_585ead125b2c49_58852762($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
