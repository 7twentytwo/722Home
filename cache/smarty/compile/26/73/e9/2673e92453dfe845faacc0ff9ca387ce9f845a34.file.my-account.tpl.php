<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:40
         compiled from "/home3/admin722/dev/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:715733257585ead00ac63d6-31888118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2673e92453dfe845faacc0ff9ca387ce9f845a34' => 
    array (
      0 => '/home3/admin722/dev/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1482598497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '715733257585ead00ac63d6-31888118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead00ae59e4_34933997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead00ae59e4_34933997')) {function content_585ead00ae59e4_34933997($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
