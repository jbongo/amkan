<?php
/* Smarty version 4.3.1, created on 2023-06-11 00:31:44
  from '/homepages/35/d847215690/htdocs/amekan/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648515f0b75d68_61359048',
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
function content_648515f0b75d68_61359048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/homepages/35/d847215690/htdocs/amekan/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/e6/1d/79/e61d793f765b3f5e8db98744357350885c70dfb3_2.file.helpers.tpl.php',
    'uid' => 'e61d793f765b3f5e8db98744357350885c70dfb3',
    'call_name' => 'smarty_template_function_renderLogo_143007771648515f0b71b33_60399566',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_143007771648515f0b71b33_60399566 */
if (!function_exists('smarty_template_function_renderLogo_143007771648515f0b71b33_60399566')) {
function smarty_template_function_renderLogo_143007771648515f0b71b33_60399566(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_143007771648515f0b71b33_60399566 */
}
