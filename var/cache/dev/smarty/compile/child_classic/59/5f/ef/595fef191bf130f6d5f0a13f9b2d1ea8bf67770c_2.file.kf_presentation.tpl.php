<?php
/* Smarty version 3.1.47, created on 2023-01-03 11:20:04
  from '/var/www/html/hm/modules/kf_presentation/views/templates/hook/kf_presentation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b4015405c0b4_38767520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '595fef191bf130f6d5f0a13f9b2d1ea8bf67770c' => 
    array (
      0 => '/var/www/html/hm/modules/kf_presentation/views/templates/hook/kf_presentation.tpl',
      1 => 1671726370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b4015405c0b4_38767520 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block kf_presentation -->
<div id="kf_presentation_block_home" class="block">
  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A propos de nous ','d'=>'Modules.Kf_Presentation'),$_smarty_tpl ) );?>
</h4>
  <div class="block_content">
    <div class="relative bg-white">
      <div class="lg:absolute lg:inset-0">
        <div class="lg:absolute lg:inset-y-0 lg:left-0 lg:w-1/2">
          <img class="h-30 w-full object-cover lg:absolute lg:h-full" src="{{ asset('/assets/img/cabane-heart-bq.jpeg') }}" alt="">
        </div>
      </div>
        <div class="relative px-4 pt-12 pb-16 sm:px-6 sm:pt-16 lg:mx-auto lg:grid lg:max-w-7xl lg:grid-cols-2 lg:px-8">
          <div class="lg:col-start-2 lg:pl-8">
            <div class="mx-auto max-w-prose text-base lg:ml-auto lg:mr-0 lg:max-w-lg">
              <h2 class="font-semibold leading-6 text-indigo-600">Huîtres Maillard</h2>
                <h3 class="mt-2 text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl">Notre Histoire </h3>
                  <p class="mt-8 text-lg text-gray-500">Ostréiculteurs de père en fils l’entreprise, se situe au cœur du marais salant tout proche de Marennes Oléron où aujourd’hui nous élevons et affinons nos huîtres en claires.</p>
        <div class="prose prose-indigo mt-5 text-gray-500">
          
          <p>Aujourd’hui nous proposons une Huitre unique issue d'un terroir exceptionnel</p>
                  </div class= >

         
      </div>
    </div>
  </div>
</div>


<!-- Notre Histoire -->


  <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cms','id'=>4),$_smarty_tpl ) );?>
">En Savoir plus</a>
      </div>
</div>
<!-- /Block kf_presentation --><?php }
}
