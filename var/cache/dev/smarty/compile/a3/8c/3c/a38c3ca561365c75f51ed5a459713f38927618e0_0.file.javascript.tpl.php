<?php
/* Smarty version 3.1.47, created on 2023-01-04 16:40:00
  from '/var/www/html/hm/themes/javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b59dd0d29ae5_24570943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a38c3ca561365c75f51ed5a459713f38927618e0' => 
    array (
      0 => '/var/www/html/hm/themes/javascript.tpl',
      1 => 1670841567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b59dd0d29ae5_24570943 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['js_def']->value)) && is_array($_smarty_tpl->tpl_vars['js_def']->value) && count($_smarty_tpl->tpl_vars['js_def']->value)) {
echo '<script'; ?>
 type="text/javascript">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_def']->value, 'def', false, 'k');
$_smarty_tpl->tpl_vars['def']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['def']->value) {
$_smarty_tpl->tpl_vars['def']->do_else = false;
?>
var <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['def']->value ));?>
;
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
if ((isset($_smarty_tpl->tpl_vars['js_files']->value)) && count($_smarty_tpl->tpl_vars['js_files']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_files']->value, 'js_uri', false, 'k');
$_smarty_tpl->tpl_vars['js_uri']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->do_else = false;
echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"><?php echo '</script'; ?>
>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ((isset($_smarty_tpl->tpl_vars['js_inline']->value)) && count($_smarty_tpl->tpl_vars['js_inline']->value)) {
echo '<script'; ?>
 type="text/javascript">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_inline']->value, 'inline', false, 'k');
$_smarty_tpl->tpl_vars['inline']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['inline']->value) {
$_smarty_tpl->tpl_vars['inline']->do_else = false;
echo $_smarty_tpl->tpl_vars['inline']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php }
}
}
