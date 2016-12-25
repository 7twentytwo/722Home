<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 17:13:55
         compiled from "/home3/admin722/dev/admin168ytzrvq/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1530602137585ef323a50768-75373662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41a5b84273144293f2c08031f560fdd1576b67f5' => 
    array (
      0 => '/home3/admin722/dev/admin168ytzrvq/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1482598379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1530602137585ef323a50768-75373662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ef323a6f575_39154629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ef323a6f575_39154629')) {function content_585ef323a6f575_39154629($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
