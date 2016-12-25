<?php /* Smarty version Smarty-3.1.19, created on 2016-12-24 11:14:55
         compiled from "/home3/admin722/dev/admin/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122907554585ead0f4707b3-59145254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce1b8d25023d46969910d3982e40c3a84f4872a' => 
    array (
      0 => '/home3/admin722/dev/admin/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1482598377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122907554585ead0f4707b3-59145254',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ead0f475a01_73586574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ead0f475a01_73586574')) {function content_585ead0f475a01_73586574($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
