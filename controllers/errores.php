<?php

class Errores extends Controller{

    function __construct()
    {
        parent:: __construct();
        error_log('Errores::construct-> Error 404');
        $this->view->mensaje="Error ";
        $this->view->render('errores/404');
    }


    function render(){
       $this->view->render('errores/404');

    }




}






?>