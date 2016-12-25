<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:50
         compiled from "/home3/admin722/dev/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2026472663585ead0a3f2399-14926451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d5b7a5964a62fb7eae0ab310f26b543b77a5f6' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/content.tpl',
      1 => 1482597947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2026472663585ead0a3f2399-14926451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead0a4144e3_32708920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead0a4144e3_32708920')) {function content_585ead0a4144e3_32708920($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
