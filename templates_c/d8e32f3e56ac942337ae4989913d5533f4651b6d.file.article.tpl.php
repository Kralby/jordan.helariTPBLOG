<?php /* Smarty version Smarty-3.1.15, created on 2014-01-27 01:51:59
         compiled from "tpl\article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18152529347ca2485c3-62796255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8e32f3e56ac942337ae4989913d5533f4651b6d' => 
    array (
      0 => 'tpl\\article.tpl',
      1 => 1390783903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18152529347ca2485c3-62796255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529347ca3c7f48_82332677',
  'variables' => 
  array (
    'article' => 0,
    'connect' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529347ca3c7f48_82332677')) {function content_529347ca3c7f48_82332677($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Program Files (x86)\\EasyPHP-DevServer-13.1VC9\\data\\localweb\\helari.jordan\\tpl\\libs\\plugins\\modifier.date_format.php';
?>
<h3><?php echo $_smarty_tpl->tpl_vars['article']->value['titre'];?>
</h3>ecrit le <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['publie']);?>
<BR><BR><BR>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['texte'], ENT_QUOTES, 'UTF-8', true);?>

<img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
"/>
<?php if ($_smarty_tpl->tpl_vars['connect']->value==true) {?>
<BR><BR><a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="btn btn-primary">Modifier</a>
<a href="supprimer_article.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="btn btn-primary">Supprimer</a>
<?php }?>
<?php }} ?>
