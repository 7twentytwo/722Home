<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:15:02
         compiled from "/home3/admin722/dev/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299680084585ead162db028-53634573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f2e04e23197a4c3fa044a0355799a6bf9816b7' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1482598379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299680084585ead162db028-53634573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead162e4643_97725509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead162e4643_97725509')) {function content_585ead162e4643_97725509($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
