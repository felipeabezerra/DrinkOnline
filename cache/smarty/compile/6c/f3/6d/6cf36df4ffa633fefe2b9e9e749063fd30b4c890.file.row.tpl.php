<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 18:13:18
         compiled from "C:\inetpub\wwwroot\prestashop\DrinkOnline_admin\themes\default\template\helpers\kpi\row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2409853499e5ee351c1-84424349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cf36df4ffa633fefe2b9e9e749063fd30b4c890' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\prestashop\\DrinkOnline_admin\\themes\\default\\template\\helpers\\kpi\\row.tpl',
      1 => 1396705896,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2409853499e5ee351c1-84424349',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'kpi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53499e5ee3e840_62199300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53499e5ee3e840_62199300')) {function content_53499e5ee3e840_62199300($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['kpi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kpi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kpi']->key => $_smarty_tpl->tpl_vars['kpi']->value){
$_smarty_tpl->tpl_vars['kpi']->_loop = true;
?>
		<div class="col-sm-6 col-lg-3">
			<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

		</div>			
		<?php } ?>
	</div>
</div><?php }} ?>