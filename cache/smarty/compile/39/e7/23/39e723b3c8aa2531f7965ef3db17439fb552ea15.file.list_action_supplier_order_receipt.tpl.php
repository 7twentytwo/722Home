<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:58
         compiled from "/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:813848884585ead125ec0c7-15173934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39e723b3c8aa2531f7965ef3db17439fb552ea15' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl',
      1 => 1482598376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '813848884585ead125ec0c7-15173934',
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
  'unifunc' => 'content_585ead1260c639_60804122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead1260c639_60804122')) {function content_585ead1260c639_60804122($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-truck"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
