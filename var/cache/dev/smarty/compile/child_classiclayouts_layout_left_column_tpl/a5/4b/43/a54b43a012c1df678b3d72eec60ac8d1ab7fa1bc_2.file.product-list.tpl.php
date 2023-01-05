<?php
/* Smarty version 3.1.47, created on 2023-01-05 16:08:39
  from '/var/www/html/hm/themes/classic/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b6e7f7a1c475_27093334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a54b43a012c1df678b3d72eec60ac8d1ab7fa1bc' => 
    array (
      0 => '/var/www/html/hm/themes/classic/templates/catalog/listing/product-list.tpl',
      1 => 1670841567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-list-jsonld.tpl' => 1,
    'file:catalog/_partials/subcategories.tpl' => 1,
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_63b6e7f7a1c475_27093334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196368126663b6e7f7a18295_33699522', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118007505963b6e7f7a18834_66025769', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_microdata_special'} */
class Block_196368126663b6e7f7a18295_33699522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_196368126663b6e7f7a18295_33699522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-list-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_list_header'} */
class Block_99747627263b6e7f7a189c2_76078827 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1 id="js-product-list-header" class="h2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'subcategory_list'} */
class Block_115207011263b6e7f7a18eb5_46129349 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)) && count($_smarty_tpl->tpl_vars['subcategories']->value) > 0) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subcategories'=>$_smarty_tpl->tpl_vars['subcategories']->value), 0, false);
?>
      <?php }?>
    <?php
}
}
/* {/block 'subcategory_list'} */
/* {block 'product_list_top'} */
class Block_129115733063b6e7f7a1a0d4_51816404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
        <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_206517242263b6e7f7a1a5d1_71339718 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="hidden-sm-down">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_182645581463b6e7f7a1ab16_72690953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'productClass'=>"col-xs-12 col-sm-6 col-xl-4"), 0, false);
?>
        <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_126570837963b6e7f7a1b0e2_15259686 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
        <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_118007505963b6e7f7a18834_66025769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_118007505963b6e7f7a18834_66025769',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_99747627263b6e7f7a189c2_76078827',
  ),
  'subcategory_list' => 
  array (
    0 => 'Block_115207011263b6e7f7a18eb5_46129349',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_129115733063b6e7f7a1a0d4_51816404',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_206517242263b6e7f7a1a5d1_71339718',
  ),
  'product_list' => 
  array (
    0 => 'Block_182645581463b6e7f7a1ab16_72690953',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_126570837963b6e7f7a1b0e2_15259686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99747627263b6e7f7a189c2_76078827', 'product_list_header', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115207011263b6e7f7a18eb5_46129349', 'subcategory_list', $this->tplIndex);
?>

    
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHeaderCategory"),$_smarty_tpl ) );?>


    <section id="products">
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129115733063b6e7f7a1a0d4_51816404', 'product_list_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206517242263b6e7f7a1a5d1_71339718', 'product_list_active_filters', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182645581463b6e7f7a1ab16_72690953', 'product_list', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126570837963b6e7f7a1b0e2_15259686', 'product_list_bottom', $this->tplIndex);
?>


      <?php } else { ?>
        <div id="js-product-list-top"></div>

        <div id="js-product-list">
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available yet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

          <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
?>
        </div>

        <div id="js-product-list-bottom"></div>
      <?php }?>
    </section>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterCategory"),$_smarty_tpl ) );?>


  </section>
<?php
}
}
/* {/block 'content'} */
}
