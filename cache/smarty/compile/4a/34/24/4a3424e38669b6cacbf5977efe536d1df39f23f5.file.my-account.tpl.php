<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:41
         compiled from "/home3/admin722/dev/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1092910093585ead01ebb6e0-64193950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a3424e38669b6cacbf5977efe536d1df39f23f5' => 
    array (
      0 => '/home3/admin722/dev/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1482598496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1092910093585ead01ebb6e0-64193950',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead01ed1377_67823030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead01ed1377_67823030')) {function content_585ead01ed1377_67823030($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>
