<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:56
         compiled from "/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_supply_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629275469585ead105f5b95-54240743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b165745ff7d87280c0ec10256ac6c51bb4b3a8' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_supply_order_receipt.tpl',
      1 => 1482598376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1629275469585ead105f5b95-54240743',
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
  'unifunc' => 'content_585ead1060c040_79684994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead1060c040_79684994')) {function content_585ead1060c040_79684994($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-truck"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
