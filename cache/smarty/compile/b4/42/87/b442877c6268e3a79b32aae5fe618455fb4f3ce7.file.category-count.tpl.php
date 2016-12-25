<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:39
         compiled from "/home3/admin722/dev/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2075812290585eacff6f5598-75655167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b442877c6268e3a79b32aae5fe618455fb4f3ce7' => 
    array (
      0 => '/home3/admin722/dev/themes/default-bootstrap/category-count.tpl',
      1 => 1482597666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2075812290585eacff6f5598-75655167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585eacff7d67e6_09345481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585eacff7d67e6_09345481')) {function content_585eacff7d67e6_09345481($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
