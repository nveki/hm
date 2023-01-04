<?php
/* Smarty version 3.1.47, created on 2023-01-04 16:40:03
  from '/var/www/html/hm/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b59dd31ddd27_37272867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dcd81629d7b4d793e6837b210c014bda5090716' => 
    array (
      0 => '/var/www/html/hm/themes/classic/templates/index.tpl',
      1 => 1670853491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b59dd31ddd27_37272867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78709931863b59dd31dce75_01747116', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_178232756563b59dd31dd055_04957970 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_60542132363b59dd31dd4f4_85742022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_98950705763b59dd31dd359_74082647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60542132363b59dd31dd4f4_85742022', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_78709931863b59dd31dce75_01747116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_78709931863b59dd31dce75_01747116',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_178232756563b59dd31dd055_04957970',
  ),
  'page_content' => 
  array (
    0 => 'Block_98950705763b59dd31dd359_74082647',
  ),
  'hook_home' => 
  array (
    0 => 'Block_60542132363b59dd31dd4f4_85742022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178232756563b59dd31dd055_04957970', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98950705763b59dd31dd359_74082647', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
