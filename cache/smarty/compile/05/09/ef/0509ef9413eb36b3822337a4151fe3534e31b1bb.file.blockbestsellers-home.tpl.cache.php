<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 17:55:23
         compiled from "C:\inetpub\wwwroot\prestashop\themes\default-bootstrap\modules\blockbestsellers\blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2470553499a2b3cf164-50439287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0509ef9413eb36b3822337a4151fe3534e31b1bb' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\prestashop\\themes\\default-bootstrap\\modules\\blockbestsellers\\blockbestsellers-home.tpl',
      1 => 1396705967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2470553499a2b3cf164-50439287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
    'active_ul' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53499a2b3ed608_56796901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53499a2b3ed608_56796901')) {function content_53499a2b3ed608_56796901($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\inetpub\\wwwroot\\prestashop\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_ul','assign'=>'active_ul'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value){?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers','active'=>$_smarty_tpl->tpl_vars['active_ul']->value), 0);?>

<?php }else{ ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane<?php if (isset($_smarty_tpl->tpl_vars['active_ul']->value)&&$_smarty_tpl->tpl_vars['active_ul']->value==1){?> active<?php }?>">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>