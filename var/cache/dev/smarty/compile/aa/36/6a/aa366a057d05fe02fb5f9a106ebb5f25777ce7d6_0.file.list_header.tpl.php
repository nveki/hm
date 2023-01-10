<?php
/* Smarty version 3.1.47, created on 2023-01-10 12:37:46
  from '/var/www/html/hm/admin057krxijn/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63bd4e0a829209_17108635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa366a057d05fe02fb5f9a106ebb5f25777ce7d6' => 
    array (
      0 => '/var/www/html/hm/admin057krxijn/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1670841567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bd4e0a829209_17108635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100970411163bd4e0a828dc4_06506617', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_100970411163bd4e0a828dc4_06506617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_100970411163bd4e0a828dc4_06506617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
