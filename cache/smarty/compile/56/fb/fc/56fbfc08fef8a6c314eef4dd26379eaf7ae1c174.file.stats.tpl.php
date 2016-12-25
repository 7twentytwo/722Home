<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 13:14:08
         compiled from "/home3/admin722/dev/admin168ytzrvq/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1680619976585ebaf0ad29c5-64947761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56fbfc08fef8a6c314eef4dd26379eaf7ae1c174' => 
    array (
      0 => '/home3/admin722/dev/admin168ytzrvq/themes/default/template/controllers/stats/stats.tpl',
      1 => 1482598367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1680619976585ebaf0ad29c5-64947761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ebaf0b01c50_86647331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ebaf0b01c50_86647331')) {function content_585ebaf0b01c50_86647331($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>
