<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:45
         compiled from "/home3/admin722/dev/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1127449445585ead05740c74-99631430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '094a11cba51a966766190a0d4a79015b9763e660' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1482598359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1127449445585ead05740c74-99631430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead05765f12_84453831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead05765f12_84453831')) {function content_585ead05765f12_84453831($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
