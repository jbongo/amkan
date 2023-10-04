<?php
/* Smarty version 4.3.1, created on 2023-06-11 00:31:44
  from '/homepages/35/d847215690/htdocs/amekan/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648515f0b5c635_35632041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14342b167585c92ae1f16b36eae32a456e8c5f98' => 
    array (
      0 => '/homepages/35/d847215690/htdocs/amekan/themes/classic/templates/page.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648515f0b5c635_35632041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_601588819648515f0b590d1_30077286', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2107089343648515f0b59871_55517008 extends Smarty_Internal_Block
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
class Block_1603008488648515f0b59443_09525298 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2107089343648515f0b59871_55517008', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1298870808648515f0b5ad59_65851469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_960460179648515f0b5b1d5_45489487 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2109573520648515f0b5aa29_66199196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1298870808648515f0b5ad59_65851469', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_960460179648515f0b5b1d5_45489487', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1511642061648515f0b5bba6_85508035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1790998225648515f0b5b8b8_93136983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1511642061648515f0b5bba6_85508035', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_601588819648515f0b590d1_30077286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_601588819648515f0b590d1_30077286',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1603008488648515f0b59443_09525298',
  ),
  'page_title' => 
  array (
    0 => 'Block_2107089343648515f0b59871_55517008',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2109573520648515f0b5aa29_66199196',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1298870808648515f0b5ad59_65851469',
  ),
  'page_content' => 
  array (
    0 => 'Block_960460179648515f0b5b1d5_45489487',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1790998225648515f0b5b8b8_93136983',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1511642061648515f0b5bba6_85508035',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1603008488648515f0b59443_09525298', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2109573520648515f0b5aa29_66199196', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1790998225648515f0b5b8b8_93136983', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
