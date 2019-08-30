<?php
/* Smarty version 3.1.30, created on 2019-08-30 02:25:32
  from "C:\wamp\www\uandes_prueba\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d68891cd9e2f3_02739341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b7f64d69dc24eaacf80b86c2db63d218aa2c67b' => 
    array (
      0 => 'C:\\wamp\\www\\uandes_prueba\\templates\\index.html',
      1 => 1567131493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:menu.html' => 1,
    'file:slider.html' => 1,
    'file:explora.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5d68891cd9e2f3_02739341 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- TEMPLATE DE HEADER  -->
<?php $_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- TEMPLATE DEL MENU  -->
<?php $_smarty_tpl->_subTemplateRender("file:menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- TEMPLATE DE SLIDER  -->
<?php $_smarty_tpl->_subTemplateRender("file:slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- TEMPLATE DE EXPLORA   -->
<?php $_smarty_tpl->_subTemplateRender("file:explora.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- TEMPLATE DE FOOTER  -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
