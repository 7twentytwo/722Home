<?php /*%%SmartyHeaderCode:1854902096585ef42193df36-57993172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e97b699a721aec4de5d82870f795d6ba2d3b1c79' => 
    array (
      0 => '/home3/admin722/dev/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1482598162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1854902096585ef42193df36-57993172',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_585ef42196b069_06191598',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585ef42196b069_06191598')) {function content_585ef42196b069_06191598($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//dev.7twentytwo.com/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
