<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 17:04:35
         compiled from "/home3/admin722/dev/modules/themeconfigurator/views/templates/admin/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1215385859585ef0f3448d53-28527466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cef2543976916200ce872d235cc69881a6297fba' => 
    array (
      0 => '/home3/admin722/dev/modules/themeconfigurator/views/templates/admin/admin.tpl',
      1 => 1482598273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1215385859585ef0f3448d53-28527466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'htmlcontent' => 0,
    'error' => 0,
    'confirmation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ef0f351a0d6_69967548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ef0f351a0d6_69967548')) {function content_585ef0f351a0d6_69967548($_smarty_tpl) {?>

<div id="htmlcontent" class="panel">
    <div class="panel-heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['info']['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 (v.<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['info']['version'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
)</div>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value) {?>
        <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['error']->value,'class'=>'error'), 0);?>

    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)&&$_smarty_tpl->tpl_vars['confirmation']->value) {?>
        <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp2."messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"main",'text'=>$_smarty_tpl->tpl_vars['confirmation']->value,'class'=>'conf'), 0);?>

    <?php }?>
    <!-- New -->
    <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp3."new.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Slides -->
    <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['htmlcontent']->value['admin_tpl_path'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp4."items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
