<?php
/* Smarty version 3.1.30, created on 2019-08-30 01:58:21
  from "C:\wamp\www\uandes_prueba\templates\menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d6882bd370f15_81340726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9babc2ec668731343ef6fe377f3841c7293db190' => 
    array (
      0 => 'C:\\wamp\\www\\uandes_prueba\\templates\\menu.html',
      1 => 1567130288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6882bd370f15_81340726 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-inverse  navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img class="logomenu" src="img/andes_2.png"  width="50%"alt=""></img>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <ul class="nav navbar-nav fontmenu">
                    <li><a style="color: #fff; margin-top: 0.5em" href="#"><p>Inicio</p></a></li>
                    <li><a style="color: #fff" href="#">Nuestros <p>Programas</p></a></li>
                    <li><a style="color: #fff" href="#">Programas para <p>Organizaciones</p></a></li>
                    <li><a style="color: #fff" href="#">Qui&eacute;nes <p>Somos</p></a></li>
                </ul>

            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Qu&eacute; quieres aprender ?" onkeyup="busqueda(this.value)">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">FAQ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESP <span class="caret"></span></a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><?php }
}
