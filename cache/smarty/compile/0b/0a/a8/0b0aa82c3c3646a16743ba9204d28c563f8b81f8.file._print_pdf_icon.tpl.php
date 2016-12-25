<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:43
         compiled from "/home3/admin722/dev/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1215014410585ead04020cc7-19526518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b0aa82c3c3646a16743ba9204d28c563f8b81f8' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1482598366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1215014410585ead04020cc7-19526518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead04039f82_40790718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead04039f82_40790718')) {function content_585ead04039f82_40790718($_smarty_tpl) {?>



<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>
