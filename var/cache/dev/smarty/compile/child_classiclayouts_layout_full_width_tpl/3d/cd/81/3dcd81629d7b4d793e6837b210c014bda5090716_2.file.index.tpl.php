<?php
/* Smarty version 3.1.47, created on 2023-01-10 15:08:09
  from '/var/www/html/hm/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63bd7149a757d1_51283713',
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
function content_63bd7149a757d1_51283713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31667732763bd7149a74a71_28270498', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_105814667863bd7149a74ca1_19586054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_200720570363bd7149a75114_10391682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_36038847663bd7149a74f98_66444594 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200720570363bd7149a75114_10391682', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_31667732763bd7149a74a71_28270498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_31667732763bd7149a74a71_28270498',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_105814667863bd7149a74ca1_19586054',
  ),
  'page_content' => 
  array (
    0 => 'Block_36038847663bd7149a74f98_66444594',
  ),
  'hook_home' => 
  array (
    0 => 'Block_200720570363bd7149a75114_10391682',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105814667863bd7149a74ca1_19586054', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36038847663bd7149a74f98_66444594', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
