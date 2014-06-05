<?php /* Smarty version Smarty-3.1.14, created on 2014-04-05 07:14:28
         compiled from "C:\inetpub\wwwroot\prestashop\themes\default-bootstrap\modules\blockbestsellers\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2694953400fc4bfe494-09255792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e4f70a618bc1688a66d94e329aae296b0e39fa' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\prestashop\\themes\\default-bootstrap\\modules\\blockbestsellers\\tab.tpl',
      1 => 1396705967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2694953400fc4bfe494-09255792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53400fc4c140b9_72512200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53400fc4c140b9_72512200')) {function content_53400fc4c140b9_72512200($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\inetpub\\wwwroot\\prestashop\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>