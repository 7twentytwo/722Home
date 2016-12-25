<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:58
         compiled from "/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1087937358585ead126220f8-76130412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53867ca5fef6e5f21e9da5789254e0429288eab2' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1482598376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1087937358585ead126220f8-76130412',
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
  'unifunc' => 'content_585ead1263cf77_05738365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead1263cf77_05738365')) {function content_585ead1263cf77_05738365($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
