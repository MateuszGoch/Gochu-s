<?php
/* Smarty version 3.1.33, created on 2020-10-10 13:42:25
  from 'C:\xampp\htdocs\shop\gochus\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f819e21dcb8a1_54324042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52eb128f75ef1ea6cf88bf5776cc71bd86f49bfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\gochus\\themes\\default\\template\\content.tpl',
      1 => 1602318391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f819e21dcb8a1_54324042 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
