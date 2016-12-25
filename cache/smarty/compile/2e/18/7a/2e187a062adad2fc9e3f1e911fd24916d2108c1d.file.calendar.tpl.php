<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:43
         compiled from "/home3/admin722/dev/admin/themes/default/template/controllers/stats/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:688268046585ead0400c111-03488893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e187a062adad2fc9e3f1e911fd24916d2108c1d' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1482598367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '688268046585ead0400c111-03488893',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead04012293_53857947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead04012293_53857947')) {function content_585ead04012293_53857947($_smarty_tpl) {?>

<div id="statsContainer" class="col-md-9">
	<?php echo $_smarty_tpl->getSubTemplate ("../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
