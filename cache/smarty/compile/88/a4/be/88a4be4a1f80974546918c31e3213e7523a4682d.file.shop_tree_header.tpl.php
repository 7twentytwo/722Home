<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:43
         compiled from "/home3/admin722/dev/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:699163345585ead03e51e04-01513865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88a4be4a1f80974546918c31e3213e7523a4682d' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1482598539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '699163345585ead03e51e04-01513865',
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
  'unifunc' => 'content_585ead03e719b4_84046032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead03e719b4_84046032')) {function content_585ead03e719b4_84046032($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>
