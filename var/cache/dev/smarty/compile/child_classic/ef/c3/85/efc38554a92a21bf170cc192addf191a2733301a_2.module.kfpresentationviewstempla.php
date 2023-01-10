<?php
/* Smarty version 3.1.47, created on 2023-01-10 15:08:09
  from 'module:kfpresentationviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63bd7149a6f960_04771941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efc38554a92a21bf170cc192addf191a2733301a' => 
    array (
      0 => 'module:kfpresentationviewstempla',
      1 => 1673350332,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bd7149a6f960_04771941 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/hm/modules/kf_presentation/views/templates/hook/kf_presentation.tpl --><!-- Block kf_presentation -->



<div id="kf_presentation_block_home" class='container block '>

  <div class="row">
    <div>
      <h2 class="center mb-2">
        <?php echo $_smarty_tpl->tpl_vars['titre']->value;?>

      </h2>
      <div class="mb-2">
        <strong class="dark">
          <?php echo $_smarty_tpl->tpl_vars['soustitre']->value;?>

        </strong>
      </div>
    </div>
    <div>
      <div class="col-md-7 mt-3">
        <div>
          <div>
            <div><?php echo $_smarty_tpl->tpl_vars['contenu1']->value;?>
</div>
    
            <div class="mt-2 mb-1"><?php echo $_smarty_tpl->tpl_vars['contenu2']->value;?>
</div>
          </div>
          <div class='text-center'>
                                </div>
        </div>
      </div>
      <div class="module-image col-md-5 mt-1">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imagedesc']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid">
      </div>
    </div>
  </div>


</div><!-- end /var/www/html/hm/modules/kf_presentation/views/templates/hook/kf_presentation.tpl --><?php }
}
