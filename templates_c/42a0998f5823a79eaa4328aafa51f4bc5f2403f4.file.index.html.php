<?php /* Smarty version Smarty-3.1.15, created on 2013-12-18 17:08:39
         compiled from "tpl\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6041528a2ba6b04520-09065137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42a0998f5823a79eaa4328aafa51f4bc5f2403f4' => 
    array (
      0 => 'tpl\\index.html',
      1 => 1387381460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6041528a2ba6b04520-09065137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528a2ba6c39a74_96284447',
  'variables' => 
  array (
    'total' => 0,
    'list_news' => 0,
    'news' => 0,
    'page' => 0,
    'rech' => 0,
    'nbpage' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528a2ba6c39a74_96284447')) {function content_528a2ba6c39a74_96284447($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 articles correspond à votre recherche
<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
?>
<?php echo $_smarty_tpl->getSubTemplate ('tpl/article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('article'=>$_smarty_tpl->tpl_vars['news']->value), 0);?>

<?php } ?>
<BR><center>
<?php if ($_smarty_tpl->tpl_vars['page']->value-1!=0) {?>
	<a href="index.php?r=<?php echo $_smarty_tpl->tpl_vars['rech']->value;?>
&p=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Precedent</a>
<?php }?>
<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nbpage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nbpage']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
	<a href="index.php?r=<?php echo $_smarty_tpl->tpl_vars['rech']->value;?>
&p=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
	<?php if ($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['nbpage']->value) {?>
		-
	<?php }?>
<?php }} ?>
	<?php if ($_smarty_tpl->tpl_vars['page']->value+1<$_smarty_tpl->tpl_vars['i']->value) {?>
		<a href="index.php?r=<?php echo $_smarty_tpl->tpl_vars['rech']->value;?>
&p=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Suivant</a>
	<?php }?>
</center>

<?php }} ?>
