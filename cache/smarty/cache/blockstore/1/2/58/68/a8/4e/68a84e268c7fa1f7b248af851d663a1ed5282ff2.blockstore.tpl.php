<?php /*%%SmartyHeaderCode:20785534ab0c3e45151-52703622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68a84e268c7fa1f7b248af851d663a1ed5282ff2' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\prestashop\\themes\\default-bootstrap\\modules\\blockstore\\blockstore.tpl',
      1 => 1396705968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20785534ab0c3e45151-52703622',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_534ab0c3ebbe61_72270741',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534ab0c3ebbe61_72270741')) {function content_534ab0c3ebbe61_72270741($_smarty_tpl) {?>
<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block">
		<a href="http://localhost/prestashop/index.php?controller=stores" title="Nossas lojas">
			Nossas lojas
		</a>
	</p>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="http://localhost/prestashop/index.php?controller=stores" title="Nossas lojas">
				<img class="img-responsive" src="http://localhost/prestashop/modules/blockstore/store.jpg" alt="Nossas lojas" />
			</a>
		</p>
        <p class="store-description">
        	Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn.
        </p>
		<div>
			<a 
			class="btn btn-default button button-small" 
			href="http://localhost/prestashop/index.php?controller=stores" 
			title="Nossas lojas">
				<span>Descubra nossas lojas<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>