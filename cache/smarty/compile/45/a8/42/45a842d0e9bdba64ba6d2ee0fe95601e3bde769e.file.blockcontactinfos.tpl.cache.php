<?php /* Smarty version Smarty-3.1.14, created on 2014-04-12 17:55:23
         compiled from "C:\inetpub\wwwroot\prestashop\themes\default-bootstrap\modules\blockcontactinfos\blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2730653499a2bb2e381-16681347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45a842d0e9bdba64ba6d2ee0fe95601e3bde769e' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\prestashop\\themes\\default-bootstrap\\modules\\blockcontactinfos\\blockcontactinfos.tpl',
      1 => 1396705967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2730653499a2bb2e381-16681347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53499a2bb7dc32_36592887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53499a2bb7dc32_36592887')) {function content_53499a2bb7dc32_36592887($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include 'C:\\inetpub\\wwwroot\\prestashop\\tools\\smarty\\plugins\\function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<section id="block_contact_infos" class="footer-block col-xs-12 col-sm-4">
	<div>
        <h4><?php echo smartyTranslate(array('s'=>'Store Information','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
        <ul class="toggle-footer">
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!=''){?>
            	<li>
            		<i class="icon-map-marker"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!=''){?>, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!=''){?>
            	<li>
            		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now toll free:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!=''){?>
            	<li>
            		<i class="icon-envelope-alt"></i><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
        </ul>
    </div>
</section>
<!-- /MODULE Block contact infos -->
<?php }} ?>