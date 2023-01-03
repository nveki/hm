<?php
/* Smarty version 3.1.47, created on 2023-01-03 13:36:12
  from '/var/www/html/hm/admin057krxijn/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b4213ca4ab49_69621745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a5f37bf2f5b9bbddf48431bed3d265672232004' => 
    array (
      0 => '/var/www/html/hm/admin057krxijn/themes/default/template/content.tpl',
      1 => 1670841567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b4213ca4ab49_69621745 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
