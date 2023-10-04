<?php
/* Smarty version 4.3.1, created on 2023-06-11 00:39:32
  from '/homepages/35/d847215690/htdocs/amekan/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648517c4dddf83_36631369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e61d793f765b3f5e8db98744357350885c70dfb3' => 
    array (
      0 => '/homepages/35/d847215690/htdocs/amekan/themes/classic/templates/_partials/helpers.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648517c4dddf83_36631369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/homepages/35/d847215690/htdocs/amekan/var/cache/prod/smarty/compile/classiclayouts_layout_left_column_tpl/e6/1d/79/e61d793f765b3f5e8db98744357350885c70dfb3_2.file.helpers.tpl.php',
    'uid' => 'e61d793f765b3f5e8db98744357350885c70dfb3',
    'call_name' => 'smarty_template_function_renderLogo_148011911648517c4dd9d67_49912607',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_148011911648517c4dd9d67_49912607 */
if (!function_exists('smarty_template_function_renderLogo_148011911648517c4dd9d67_49912607')) {
function smarty_template_function_renderLogo_148011911648517c4dd9d67_49912607(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_148011911648517c4dd9d67_49912607 */
}
