<?php /*%%SmartyHeaderCode:219081384585ef43e036511-20310650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef6ba895bd18d9c03a27a26f2a3589f549e5cac1' => 
    array (
      0 => '/home3/admin722/dev/themes/default-bootstrap/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1482598158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219081384585ef43e036511-20310650',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ef43e112324_95314757',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ef43e112324_95314757')) {function content_585ef43e112324_95314757($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://dev.7twentytwo.com/manufacturers" title="Manufacturers">
						Manufacturers
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://dev.7twentytwo.com/1_fashion-manufacturer" title="More about Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">All manufacturers</option>
													<option value="http://dev.7twentytwo.com/1_fashion-manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
