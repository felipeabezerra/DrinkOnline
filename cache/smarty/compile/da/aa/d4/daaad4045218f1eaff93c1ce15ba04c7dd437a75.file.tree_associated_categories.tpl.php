<?php /* Smarty version Smarty-3.1.14, created on 2014-04-05 07:14:13
         compiled from "C:\inetpub\wwwroot\prestashop\admin\themes\default\template\controllers\products\helpers\tree\tree_associated_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:657753400fb50df6f5-05315515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daaad4045218f1eaff93c1ce15ba04c7dd437a75' => 
    array (
      0 => 'C:\\inetpub\\wwwroot\\prestashop\\admin\\themes\\default\\template\\controllers\\products\\helpers\\tree\\tree_associated_categories.tpl',
      1 => 1396705893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '657753400fb50df6f5-05315515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
    'use_checkbox' => 0,
    'use_search' => 0,
    'selected_categories' => 0,
    'imploded_selected_categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53400fb512a695_45607741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53400fb512a695_45607741')) {function content_53400fb512a695_45607741($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)){?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)){?>
	<ul id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<script type="text/javascript">
	<?php if (isset($_smarty_tpl->tpl_vars['use_checkbox']->value)&&$_smarty_tpl->tpl_vars['use_checkbox']->value==true){?>
		function checkAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", true);

					$('select#id_category_default').append('<option value="'+$(this).val()+'">'+($(this).val() !=1 ? $(this).parent().find('label').html() : home)+'</option>');
					if ($('select#id_category_default option').length > 0)
					{
						$('select#id_category_default').closest('.form-group').show();
						$('#no_default_category').hide();
					}

					$(this).parent().addClass("tree-selected");
				}
			);
		}

		function uncheckAllAssociatedCategories($tree)
		{
			$tree.find(":input[type=checkbox]").each(
				function()
				{
					$(this).prop("checked", false);

					$('select#id_category_default option[value='+$(this).val()+']').remove();
					if ($('select#id_category_default option').length == 0)
					{
						$('select#id_category_default').closest('.form-group').hide();
						$('#no_default_category').show();
					}

					$(this).parent().removeClass("tree-selected");
				}
			);
		}
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['use_search']->value)&&$_smarty_tpl->tpl_vars['use_search']->value==true){?>
		$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-categories-search").bind("typeahead:selected", function(obj, datum) {
		    $("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input").each(
				function()
				{
					if ($(this).val() == datum.id_category)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents("ul.tree").each(
							function()
							{
								$(this).children().children().children(".icon-folder-close")
									.removeClass("icon-folder-close")
									.addClass("icon-folder-open");
								$(this).show();
							}
						);
					}
				}
			);
		});
	<?php }?>
	$(document).ready(function () {
		$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").tree("collapseAll");
		$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input[type=radio]").click(
			function()
			{
				location.href = location.href.replace(
					/&id_category=[0-9]*/, "")+"&id_category="
					+$(this).val();
			}
		);

		<?php if (isset($_smarty_tpl->tpl_vars['selected_categories']->value)){?>
			$('#no_default_category').hide();
			<?php $_smarty_tpl->tpl_vars['imploded_selected_categories'] = new Smarty_variable(implode('","',$_smarty_tpl->tpl_vars['selected_categories']->value), null, 0);?>
			var selected_categories = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_categories']->value;?>
");

			$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input").each(
				function()
				{
					if ($.inArray($(this).val(), selected_categories) != -1)
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
						$(this).parents("ul.tree").each(
							function()
							{
								$(this).children().children().children(".icon-folder-close")
									.removeClass("icon-folder-close")
									.addClass("icon-folder-open");
								$(this).show();
							}
						);
					}
				}
			);
		<?php }?>

		$("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").find(":input[type=checkbox]").click(
			function()
			{
				if ($(this).prop("checked"))
				{
					$('select#id_category_default').append('<option value="'+$(this).val()+'">'+($(this).val() !=1 ? $(this).parent().find('label').html() : home)+'</option>');
					if ($('select#id_category_default option').length > 0)
					{
						$('select#id_category_default').closest('.form-group').show();
						$('#no_default_category').hide();
					}
				}
				else
				{
					$('select#id_category_default option[value='+$(this).val()+']').remove();
					if ($('select#id_category_default option').length == 0)
					{
						$('select#id_category_default').closest('.form-group').hide();
						$('#no_default_category').show();
					}
				}
			}
		);
	});
</script><?php }} ?>