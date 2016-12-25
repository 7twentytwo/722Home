<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:15:02
         compiled from "/home3/admin722/dev/admin/themes/default/template/helpers/tree/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:636888033585ead162e38f3-35358119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbe880c882d02b5ecfbe6d24c2ffa83d5cd021a6' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1482598379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '636888033585ead162e38f3-35358119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead16335ff0_11071401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead16335ff0_11071401')) {function content_585ead16335ff0_11071401($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>
