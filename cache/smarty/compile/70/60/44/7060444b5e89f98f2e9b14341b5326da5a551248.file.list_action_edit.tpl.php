<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:58
         compiled from "/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1675475912585ead124fda61-31499082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7060444b5e89f98f2e9b14341b5326da5a551248' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1482598376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1675475912585ead124fda61-31499082',
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
  'unifunc' => 'content_585ead12518a35_92270034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead12518a35_92270034')) {function content_585ead12518a35_92270034($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
