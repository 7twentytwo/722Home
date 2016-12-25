<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 12:26:34
         compiled from "/home3/admin722/dev/admin168ytzrvq/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1459532466585eafca3fdfd1-91883093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '926709d01eaddabf5efff3e840ca67a584a78c98' => 
    array (
      0 => '/home3/admin722/dev/admin168ytzrvq/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1482598531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1459532466585eafca3fdfd1-91883093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585eafca4635f1_02581240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585eafca4635f1_02581240')) {function content_585eafca4635f1_02581240($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
