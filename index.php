<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER["DOCUMENT_ROOT"] . '/uandes_prueba/lib/smarty/libs/Smarty.class.php';

/**
 * Description of ClassIdex: controlador del archivo index
 *
 * @author Juan Manuel gutierrez
 * @email juangu455@yahoo.com.cop
 * @cel 3218734232
 */
class ClassIndex {

    private $_smarty;

    /**
     * Constructor de la clase
     */
    public function __construct() {
        $this->_smarty = new Smarty();
        $this->run();
    }

    /**
     * Metodo que envia la informacion a la vista
     */
    public function run() {
        $this->simulaServicio();
        $this->_smarty->assign("data", $this->data);
        $this->_smarty->display('index.html');
    }

    /**
     * Metodo que simula un servicio el consumo de datos
     */
    public function simulaServicio() {
        $this->data = array(
            array(
                "titulo" => "NUESTROS PROGRAMAS",
                "text" => "t is a long established t is a long established established established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.",
                "imagen" => "img/card1.png"
            ),
            array(
                "titulo" => "PROGRAMAS PARA NI&Ntilde;OS Y JOVENES",
                "text" => "t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.",
                "imagen" => "img/card2.png"
            ),
            array(
                "titulo" => "PROGRAMAS PARA ORGANIZACIONES",
                "text" => "t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.",
                "imagen" => "img/card3.png"
            )
        );

    }

}

$class = new ClassIndex();
