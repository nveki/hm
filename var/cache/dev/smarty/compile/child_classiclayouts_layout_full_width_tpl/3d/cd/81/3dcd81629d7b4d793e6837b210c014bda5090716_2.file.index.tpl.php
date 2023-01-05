<?php
/* Smarty version 3.1.47, created on 2023-01-05 16:08:41
  from '/var/www/html/hm/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b6e7f9312fd3_69861163',
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
function content_63b6e7f9312fd3_69861163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42930073363b6e7f9312261_28156379', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_39009471363b6e7f9312496_43065210 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_155114412763b6e7f9312928_63677896 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_39529059963b6e7f9312791_46534630 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155114412763b6e7f9312928_63677896', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_42930073363b6e7f9312261_28156379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_42930073363b6e7f9312261_28156379',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_39009471363b6e7f9312496_43065210',
  ),
  'page_content' => 
  array (
    0 => 'Block_39529059963b6e7f9312791_46534630',
  ),
  'hook_home' => 
  array (
    0 => 'Block_155114412763b6e7f9312928_63677896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39009471363b6e7f9312496_43065210', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39529059963b6e7f9312791_46534630', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
