<?php
/* Smarty version 3.1.47, created on 2023-01-10 15:07:56
  from '/var/www/html/hm/themes/classic/templates/checkout/_partials/cart-summary-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63bd713c3d7ee2_92847060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd676e84b95ab7cd9a90d0b9ce99807c1edb81db' => 
    array (
      0 => '/var/www/html/hm/themes/classic/templates/checkout/_partials/cart-summary-top.tpl',
      1 => 1670841567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bd713c3d7ee2_92847060 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cart-summary-top js-cart-summary-top">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

</div>
<?php }
}
