<?php
/* Smarty version 3.1.30, created on 2019-08-30 02:25:33
  from "C:\wamp\www\uandes_prueba\templates\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d68891d2479a4_45803855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc55cf875c3fb639c71dab9b259592dfd678013' => 
    array (
      0 => 'C:\\wamp\\www\\uandes_prueba\\templates\\footer.html',
      1 => 1567130226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68891d2479a4_45803855 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- /Contact -->

<!-- Footer -->
<footer>

</footer>
<!-- /Footer -->

<!-- JQUERY -->
<?php echo '<script'; ?>
 src="lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap core JavaScript -->
<?php echo '<script'; ?>
 src="lib/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('.carousel').carousel({
        interval: 2000
    })

    function accionjs() {
        alert(' Ejecutar jquery, javascript, ajax');
    }

    function busqueda(value) {
        if (value.length > 0) {
            alert("Buscando el valor de: " + value);
        }
    }
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
