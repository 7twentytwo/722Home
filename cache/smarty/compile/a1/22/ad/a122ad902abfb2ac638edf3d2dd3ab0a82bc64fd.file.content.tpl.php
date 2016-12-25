<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:43
         compiled from "/home3/admin722/dev/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114338403585ead03d31b42-62382819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a122ad902abfb2ac638edf3d2dd3ab0a82bc64fd' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1482598364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114338403585ead03d31b42-62382819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead03d5b246_31096458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead03d5b246_31096458')) {function content_585ead03d5b246_31096458($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
