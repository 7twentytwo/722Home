<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:44
         compiled from "/home3/admin722/dev/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:853951762585ead04d8b270-16149937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00db3ceb4396e11b7fc365da54230c080adaeca2' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1482598351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '853951762585ead04d8b270-16149937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead04d94d17_23859150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead04d94d17_23859150')) {function content_585ead04d94d17_23859150($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
