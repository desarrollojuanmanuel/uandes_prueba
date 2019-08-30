<?php
/* Smarty version 3.1.30, created on 2019-08-30 02:25:33
  from "C:\wamp\www\uandes_prueba\templates\explora.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d68891d04df19_55550292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6d04fb7f3b64f6d602b562220eb5626f9ed756c' => 
    array (
      0 => 'C:\\wamp\\www\\uandes_prueba\\templates\\explora.html',
      1 => 1567127391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68891d04df19_55550292 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="jumbotron"> 

    <h2 class="">EXPLORA NUESTRA OFERTA</h2>
    <p class="textsub">Descubre lo que tenemos para ti!</p>

    <div class="row thumbnailrow">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'contact', false, NULL, 'outer', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?php echo $_smarty_tpl->tpl_vars['contact']->value['imagen'];?>
" width="100%">
                <div class="caption">
                    <h2><?php echo $_smarty_tpl->tpl_vars['contact']->value['titulo'];?>
</h2>
                    <hr>
                    <p class="cards"><?php echo $_smarty_tpl->tpl_vars['contact']->value['text'];?>
</p>
                    <button class="btn-default" onclick="accionjs()">Conoce M&aacute;s</button>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </div>
</div>


<?php }
}
