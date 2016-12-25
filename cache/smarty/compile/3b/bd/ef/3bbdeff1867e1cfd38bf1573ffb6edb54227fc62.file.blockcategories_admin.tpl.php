<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 17:26:34
         compiled from "/home3/admin722/dev/modules/blockcategories/views/blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1401561649585ef61a3303c6-23332032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bbdeff1867e1cfd38bf1573ffb6edb54227fc62' => 
    array (
      0 => '/home3/admin722/dev/modules/blockcategories/views/blockcategories_admin.tpl',
      1 => 1482597802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401561649585ef61a3303c6-23332032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helper' => 0,
    'format' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ef61a370cb8_73349368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ef61a370cb8_73349368')) {function content_585ef61a370cb8_73349368($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'In the default theme, these images will be displayed in the top horizontal menu; but only if the category is one of the first level (see Top horizontal menu module for more info).','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Menu thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
	<div class="col-lg-6 col-lg-offset-3">
		<div class="help-block"><?php echo smartyTranslate(array('s'=>'Recommended dimensions (for the default theme): %1spx x %2spx','sprintf'=>array($_smarty_tpl->tpl_vars['format']->value['width'],$_smarty_tpl->tpl_vars['format']->value['height'])),$_smarty_tpl);?>
</div>
	</div>
</div>
<?php }} ?>
