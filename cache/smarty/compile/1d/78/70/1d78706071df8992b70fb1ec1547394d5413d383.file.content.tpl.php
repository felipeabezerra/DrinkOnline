<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 18:11:46
         compiled from "C:\inetpub\wwwroot\prestashop\DrinkOnline_admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:838553499e02b2e337-06008945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d78706071df8992b70fb1ec1547394d5413d383' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\prestashop\\DrinkOnline_admin\\themes\\default\\template\\content.tpl',
      1 => 1396705888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '838553499e02b2e337-06008945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53499e02b3cea6_13821180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53499e02b3cea6_13821180')) {function content_53499e02b3cea6_13821180($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>