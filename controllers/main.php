<?php

class Main extends Controller{

    function __construct()
    {
        error_log('Main::construct -> Pagina Principal');
        parent:: __construct();
        $this->view->render('main/index');
    }






}