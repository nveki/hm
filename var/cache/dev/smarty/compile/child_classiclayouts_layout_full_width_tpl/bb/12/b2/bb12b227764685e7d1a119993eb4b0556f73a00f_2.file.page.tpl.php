<?php
/* Smarty version 3.1.47, created on 2023-01-05 16:08:41
  from '/var/www/html/hm/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b6e7f9315989_65647029',
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
function content_63b6e7f9315989_65647029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51700214863b6e7f9314152_77631199', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_117132313663b6e7f9314544_91889676 extends Smarty_Internal_Block
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
class Block_99331715263b6e7f9314322_32545414 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117132313663b6e7f9314544_91889676', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_153967916863b6e7f9314d84_07727353 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_8756758663b6e7f9314fe4_71876444 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_178846775663b6e7f9314be9_43503019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153967916863b6e7f9314d84_07727353', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8756758663b6e7f9314fe4_71876444', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_93746817763b6e7f9315512_55612979 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_121704640963b6e7f9315391_06090908 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93746817763b6e7f9315512_55612979', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_51700214863b6e7f9314152_77631199 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_51700214863b6e7f9314152_77631199',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_99331715263b6e7f9314322_32545414',
  ),
  'page_title' => 
  array (
    0 => 'Block_117132313663b6e7f9314544_91889676',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_178846775663b6e7f9314be9_43503019',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_153967916863b6e7f9314d84_07727353',
  ),
  'page_content' => 
  array (
    0 => 'Block_8756758663b6e7f9314fe4_71876444',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_121704640963b6e7f9315391_06090908',
  ),
  'page_footer' => 
  array (
    0 => 'Block_93746817763b6e7f9315512_55612979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99331715263b6e7f9314322_32545414', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178846775663b6e7f9314be9_43503019', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121704640963b6e7f9315391_06090908', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
