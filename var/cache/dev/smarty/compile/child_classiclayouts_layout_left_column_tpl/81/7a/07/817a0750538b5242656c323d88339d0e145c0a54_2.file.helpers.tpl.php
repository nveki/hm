<?php
/* Smarty version 3.1.47, created on 2023-01-10 14:59:51
  from '/var/www/html/hm/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63bd6f57845a54_81436674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '817a0750538b5242656c323d88339d0e145c0a54' => 
    array (
      0 => '/var/www/html/hm/themes/classic/templates/_partials/helpers.tpl',
      1 => 1670841567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bd6f57845a54_81436674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/hm/var/cache/dev/smarty/compile/child_classiclayouts_layout_left_column_tpl/81/7a/07/817a0750538b5242656c323d88339d0e145c0a54_2.file.helpers.tpl.php',
    'uid' => '817a0750538b5242656c323d88339d0e145c0a54',
    'call_name' => 'smarty_template_function_renderLogo_80047450663bd6f57844771_30689254',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_80047450663bd6f57844771_30689254 */
if (!function_exists('smarty_template_function_renderLogo_80047450663bd6f57844771_30689254')) {
function smarty_template_function_renderLogo_80047450663bd6f57844771_30689254(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_80047450663bd6f57844771_30689254 */
}
