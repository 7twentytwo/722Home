<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:46
         compiled from "/home3/admin722/dev/admin/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:478486118585ead064bfc54-45990905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9041e2e810dd82641ae258c57ac7aff5671fa210' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1482598363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '478486118585ead064bfc54-45990905',
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
  'unifunc' => 'content_585ead064da662_39633496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead064da662_39633496')) {function content_585ead064da662_39633496($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
