<?php
/* Smarty version 4.3.1, created on 2023-06-11 01:00:08
  from '/homepages/35/d847215690/htdocs/amekan/cses0ytzga1x2cqe/themes/default/template/helpers/kpi/row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64851c986a3756_31286906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a53ef6e48b184a925ad9f281e850321bf72d5959' => 
    array (
      0 => '/homepages/35/d847215690/htdocs/amekan/cses0ytzga1x2cqe/themes/default/template/helpers/kpi/row.tpl',
      1 => 1682500895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64851c986a3756_31286906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/homepages/35/d847215690/htdocs/amekan/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="panel kpi-container">
	<?php if ($_smarty_tpl->tpl_vars['refresh']->value) {?>
		<div class="kpi-refresh"><button class="close refresh" type="button" onclick="refresh_kpis(true);"><i class="process-icon-refresh" style="font-size:1em"></i></button></div>
	<?php }?>
	<div class="row">
		<?php $_smarty_tpl->_assignInScope('col', (int)(12/smarty_modifier_count($_smarty_tpl->tpl_vars['kpis']->value)));?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['kpis']->value, 'i', false, NULL, 'kpi', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_kpi']->value['iteration']++;
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_kpi']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_kpi']->value['iteration'] : null) > $_smarty_tpl->tpl_vars['col']->value+1) {?>
				</div>
				<div class="row">
			<?php }?>
			<div class="col-sm-6 col-lg-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</div>
<?php }
}
