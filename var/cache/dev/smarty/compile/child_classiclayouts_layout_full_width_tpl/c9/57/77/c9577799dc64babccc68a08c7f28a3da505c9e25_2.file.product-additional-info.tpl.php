<?php
/* Smarty version 3.1.47, created on 2023-01-10 12:37:49
  from '/var/www/html/hm/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63bd4e0d7e89b5_48082423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9577799dc64babccc68a08c7f28a3da505c9e25' => 
    array (
      0 => '/var/www/html/hm/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1670841567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bd4e0d7e89b5_48082423 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
