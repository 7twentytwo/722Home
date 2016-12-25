<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:42
         compiled from "/home3/admin722/dev/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1201701528585ead0278b799-47371357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70bf348cd5bf7136742490f36dc8001405e952aa' => 
    array (
      0 => '/home3/admin722/dev/themes/default-bootstrap/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1482598498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1201701528585ead0278b799-47371357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead027c5570_37144745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead027c5570_37144745')) {function content_585ead027c5570_37144745($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home3/admin722/dev/tools/smarty/plugins/modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
