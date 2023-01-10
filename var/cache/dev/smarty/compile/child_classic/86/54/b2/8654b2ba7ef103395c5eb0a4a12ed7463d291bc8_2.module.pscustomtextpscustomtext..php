<?php
/* Smarty version 3.1.47, created on 2023-01-10 15:08:09
  from 'module:pscustomtextpscustomtext.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63bd7149a72703_52094237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8654b2ba7ef103395c5eb0a4a12ed7463d291bc8' => 
    array (
      0 => 'module:pscustomtextpscustomtext.',
      1 => 1673350362,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bd7149a72703_52094237 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/hm/themes/child_classic/modules/ps_customtext/ps_customtext.tpl -->
<div id="custom-text">

  <div class="row p-4">

    <div class="col-md-12 mb-2"><?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>
</div>
    
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'category','id'=>36),$_smarty_tpl ) );?>
" class="col-md-2 col-sm-12 module-button btn btn-primary center">La Boutique </a>
  </div>
          
</div>
<!-- end /var/www/html/hm/themes/child_classic/modules/ps_customtext/ps_customtext.tpl --><?php }
}
