<?php
/* Smarty version 3.1.47, created on 2023-01-04 16:40:03
  from 'module:kfpresentationviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b59dd31da2a6_82142463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efc38554a92a21bf170cc192addf191a2733301a' => 
    array (
      0 => 'module:kfpresentationviewstempla',
      1 => 1672846791,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b59dd31da2a6_82142463 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/hm/modules/kf_presentation/views/templates/hook/kf_presentation.tpl --><!-- Block kf_presentation -->



<div id="kf_presentation_block_home" class='container, block row'>

  <h2 class="center mb-2">
  <?php echo $_smarty_tpl->tpl_vars['titre']->value;?>

  </h2>

  <div class="mb-2"><strong class="dark">
  <?php echo $_smarty_tpl->tpl_vars['soustitre']->value;?>

  </strong></div>

  <div class="col-md-7 mt-2">
    <div>

    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contenu']->value, ENT_QUOTES, 'UTF-8');?>

   

    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cms','id'=>4),$_smarty_tpl ) );?>
" class="mb-2 mt-2 col-md-4 col-sm-12 module-button btn btn-primary text-center">En Savoir
        plus</a>
    </div>
  </div>
  <div class="module-image col-md-5">
      </div>
 
</div>

<!-- end /var/www/html/hm/modules/kf_presentation/views/templates/hook/kf_presentation.tpl --><?php }
}
