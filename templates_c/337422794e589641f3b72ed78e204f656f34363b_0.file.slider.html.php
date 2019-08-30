<?php
/* Smarty version 3.1.30, created on 2019-08-30 02:09:36
  from "C:\wamp\www\uandes_prueba\templates\slider.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d6885601c4551_69899131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '337422794e589641f3b72ed78e204f656f34363b' => 
    array (
      0 => 'C:\\wamp\\www\\uandes_prueba\\templates\\slider.html',
      1 => 1567130974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6885601c4551_69899131 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <img src="img/slide1.jpg" width="100%">
      </div>

      <div class="item">
        <img src="img/slide2.jpg" width="100%">
      </div>
    
      <div class="item">
        <img src="img/slide3.jpg" width="100%">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><?php }
}
