<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:39
         compiled from "/home3/admin722/dev/admin/themes/default/template/controllers/attachments/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1527141252585eacff6e5037-98162765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19535d301d91804257b25cf1675a5fcf32111b1d' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/controllers/attachments/helpers/list/list_action_delete.tpl',
      1 => 1482598503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1527141252585eacff6e5037-98162765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'id_attachment' => 0,
    'product_attachements' => 0,
    'product_list' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585eacff818929_90799414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585eacff818929_90799414')) {function content_585eacff818929_90799414($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="<?php if (isset($_smarty_tpl->tpl_vars['product_attachements']->value[htmlspecialchars($_smarty_tpl->tpl_vars['id_attachment']->value, ENT_QUOTES, 'UTF-8', true)])) {?>if (attachments.confirmProductAttached('<?php echo $_smarty_tpl->tpl_vars['product_list']->value[htmlspecialchars($_smarty_tpl->tpl_vars['id_attachment']->value, ENT_QUOTES, 'UTF-8', true)];?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};<?php } else { ?>return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')<?php }?>"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
