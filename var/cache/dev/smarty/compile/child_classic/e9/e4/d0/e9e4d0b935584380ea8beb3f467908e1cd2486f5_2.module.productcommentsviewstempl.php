<?php
/* Smarty version 3.1.47, created on 2023-01-05 16:08:41
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63b6e7f93059f8_65529702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e4d0b935584380ea8beb3f467908e1cd2486f5' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1670841567,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b6e7f93059f8_65529702 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/hm/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['product_comment_grade_url']->value;?>
">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
<div itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" itemscope>
  <meta itemprop="reviewCount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nb_comments']->value, ENT_QUOTES, 'UTF-8');?>
" />
  <meta itemprop="ratingValue" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['average_grade']->value, ENT_QUOTES, 'UTF-8');?>
" />
</div>
<?php }?>
<!-- end /var/www/html/hm/modules/productcomments/views/templates/hook/product-list-reviews.tpl --><?php }
}
