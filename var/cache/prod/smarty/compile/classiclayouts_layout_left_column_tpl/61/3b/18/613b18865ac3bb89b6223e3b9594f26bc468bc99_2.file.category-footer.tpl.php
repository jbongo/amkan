<?php
/* Smarty version 4.3.1, created on 2023-06-11 00:39:33
  from '/homepages/35/d847215690/htdocs/amekan/themes/classic/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648517c5072120_28398768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613b18865ac3bb89b6223e3b9594f26bc468bc99' => 
    array (
      0 => '/homepages/35/d847215690/htdocs/amekan/themes/classic/templates/catalog/_partials/category-footer.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648517c5072120_28398768 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
