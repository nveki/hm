<?php
/* Smarty version 3.1.47, created on 2023-01-04 16:40:03
  from '/var/www/html/hm/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b59dd31e0742_50571709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb12b227764685e7d1a119993eb4b0556f73a00f' => 
    array (
      0 => '/var/www/html/hm/themes/classic/templates/page.tpl',
      1 => 1670841567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b59dd31e0742_50571709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118761440363b59dd31df004_88510279', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15009473363b59dd31df3e0_88997307 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_174576013463b59dd31df1c8_97229255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15009473363b59dd31df3e0_88997307', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_59990584763b59dd31dfba7_59332712 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_101148344763b59dd31dfdf0_31762916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_66746118063b59dd31dfa14_88468463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59990584763b59dd31dfba7_59332712', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101148344763b59dd31dfdf0_31762916', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_49688181463b59dd31e0305_56969153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_80613058363b59dd31e0196_48645454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49688181463b59dd31e0305_56969153', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_118761440363b59dd31df004_88510279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_118761440363b59dd31df004_88510279',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_174576013463b59dd31df1c8_97229255',
  ),
  'page_title' => 
  array (
    0 => 'Block_15009473363b59dd31df3e0_88997307',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_66746118063b59dd31dfa14_88468463',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_59990584763b59dd31dfba7_59332712',
  ),
  'page_content' => 
  array (
    0 => 'Block_101148344763b59dd31dfdf0_31762916',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_80613058363b59dd31e0196_48645454',
  ),
  'page_footer' => 
  array (
    0 => 'Block_49688181463b59dd31e0305_56969153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174576013463b59dd31df1c8_97229255', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66746118063b59dd31dfa14_88468463', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80613058363b59dd31e0196_48645454', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
