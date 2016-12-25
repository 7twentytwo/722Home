<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:42
         compiled from "/home3/admin722/dev/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:663611222585ead02cc29e8-91997003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faba47b19bf9b6fd03436ce12830d2899479b2c9' => 
    array (
      0 => '/home3/admin722/dev/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1482598493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '663611222585ead02cc29e8-91997003',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead02cd2ec5_20966114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead02cd2ec5_20966114')) {function content_585ead02cd2ec5_20966114($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
