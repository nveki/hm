<?php
/* Smarty version 3.1.47, created on 2023-01-03 17:01:45
  from '/var/www/html/hm/modules/kf_presentation/views/templates/hook/kf_presentation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b4516981bc99_06718607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '595fef191bf130f6d5f0a13f9b2d1ea8bf67770c' => 
    array (
      0 => '/var/www/html/hm/modules/kf_presentation/views/templates/hook/kf_presentation.tpl',
      1 => 1672761572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b4516981bc99_06718607 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block kf_presentation -->




<div id="kf_presentation_block_home" class='container, block row'>

  <h2 class="center mb-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Notre Histoire','d'=>'Modules.Kf_Presentation'),$_smarty_tpl ) );?>
</h2>

  <div class="mb-2"><strong class="dark">"Aujourd’hui nous proposons une Huitre unique issue d'un terroir exceptionnel"</strong></div>

  <div class="col-md-6 mt-2">
    <div>
    <p>Ostréiculteurs de père en fils l’entreprise, se situe au cœur du marais salant tout proche de Marennes Oléron
    où aujourd’hui nous élevons et affinons nos huîtres en claires. 
    </p><p>Ostréiculteurs de père en fils l’entreprise, se situe au cœur du marais salant tout proche de Marennes Oléron
    où aujourd’hui nous élevons et affinons nos huîtres en claires. 
    </p><p>Ostréiculteurs de père en fils l’entreprise, se situe au cœur du marais salant tout proche de Marennes Oléron
    où aujourd’hui nous élevons et affinons nos huîtres en claires. 
    </p>
    </div>
  </div>
  <div class="module-image col-md-6">
    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
img/cabane-heart-mq.png" alt="Le coeur de la cabane" class="img-fluid">
  </div>

    <div class="col align-self-end">
      <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cms','id'=>4),$_smarty_tpl ) );?>
" class=" mt-2 col-md-4 col-sm-12 module-button btn btn-primary">En Savoir
        plus</a>
    </div>
 
</div>

<?php }
}
