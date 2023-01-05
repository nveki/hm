<?php
/* Smarty version 3.1.47, created on 2023-01-05 16:08:41
  from '/var/www/html/hm/modules/ps_checkout/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b6e7f94899b6_92223259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4e38cb5cefeabea959c266d66a2fce5c09e3273' => 
    array (
      0 => '/var/www/html/hm/modules/ps_checkout/views/templates/hook/header.tpl',
      1 => 1672927031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b6e7f94899b6_92223259 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contentToPrefetch']->value, 'content');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
  <link rel="prefetch" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['content']->value['link'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" as="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
