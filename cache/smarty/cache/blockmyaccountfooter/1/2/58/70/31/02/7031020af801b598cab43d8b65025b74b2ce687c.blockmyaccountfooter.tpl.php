<?php /*%%SmartyHeaderCode:3163153499a2b9469e7-07789737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7031020af801b598cab43d8b65025b74b2ce687c' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\prestashop\\themes\\default-bootstrap\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1396705968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3163153499a2b9469e7-07789737',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53499a2baff1f0_06126469',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53499a2baff1f0_06126469')) {function content_53499a2baff1f0_06126469($_smarty_tpl) {?>
<!-- Block myaccount module -->
<section class="footer-block col-xs-12 col-sm-4">
	<h4><a href="http://localhost/prestashop/index.php?controller=my-account" title="Gerenciar minha conta de usuário" rel="nofollow">Minha Conta</a></h4>
	<div class="block_content toggle-footer">
		<ul class="bullet">
			<li><a href="http://localhost/prestashop/index.php?controller=history" title="Minhas Compras" rel="nofollow">Minhas Compras</a></li>
						<li><a href="http://localhost/prestashop/index.php?controller=order-slip" title="Meus Créditos" rel="nofollow">Meus Créditos</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=addresses" title="Meus endereços" rel="nofollow">Meus endereços</a></li>
			<li><a href="http://localhost/prestashop/index.php?controller=identity" title="Gerenciar minhas informações pessoais" rel="nofollow">Minhas Informações</a></li>
						
            		</ul>
	</div>
</section>
<!-- /Block myaccount module -->
<?php }} ?>