<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 18:13:18
         compiled from "C:\inetpub\wwwroot\prestashop\DrinkOnline_admin\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3039753499e5ebcad74-95815750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e55d3da17729bc45831d5704e7db50c036388a44' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\prestashop\\DrinkOnline_admin\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1396705897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3039753499e5ebcad74-95815750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53499e5ebe4dc9_99145406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53499e5ebe4dc9_99145406')) {function content_53499e5ebe4dc9_99145406($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> tree-item-disable<?php }?>">
	<label class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true){?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>