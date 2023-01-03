<?php
/* Smarty version 3.1.47, created on 2022-12-19 12:02:24
  from '/var/www/html/hm/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63a044c0bbae84_00487853',
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
function content_63a044c0bbae84_00487853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43988589663a044c0bb7157_52243380', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_94162452663a044c0bb7ba5_23097019 extends Smarty_Internal_Block
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
class Block_88245219463a044c0bb75c8_59043299 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94162452663a044c0bb7ba5_23097019', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_157442866163a044c0bb8fd8_28001259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_178396326163a044c0bb95c1_97719126 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_37596339763a044c0bb8bd1_54146149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157442866163a044c0bb8fd8_28001259', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178396326163a044c0bb95c1_97719126', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_111820601663a044c0bba266_47959520 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_121634160063a044c0bb9eb6_18859914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111820601663a044c0bba266_47959520', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_43988589663a044c0bb7157_52243380 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_43988589663a044c0bb7157_52243380',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_88245219463a044c0bb75c8_59043299',
  ),
  'page_title' => 
  array (
    0 => 'Block_94162452663a044c0bb7ba5_23097019',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_37596339763a044c0bb8bd1_54146149',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_157442866163a044c0bb8fd8_28001259',
  ),
  'page_content' => 
  array (
    0 => 'Block_178396326163a044c0bb95c1_97719126',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_121634160063a044c0bb9eb6_18859914',
  ),
  'page_footer' => 
  array (
    0 => 'Block_111820601663a044c0bba266_47959520',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88245219463a044c0bb75c8_59043299', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37596339763a044c0bb8bd1_54146149', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121634160063a044c0bb9eb6_18859914', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
