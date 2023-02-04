<?php

require_once 'controllers/errores.php';

class App
{
   
    function __construct()
    {

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) {

            error_log('APP::construc-> No se especificó ningun controlador');

            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            return false;
        }

        $archivoController = 'controllers/' . $url[0] . '.php';
        if (file_exists($archivoController)) {
            require_once $archivoController;

            // iniciar controlador y modelos

            $controller = new $url[0];
            $controller->loadModel($url[0]);

            // si hay un método que se requiere cargar
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    if (isset($url[2])) {
                        $nparam = sizeof($url) - 2;
                        //crear un arreglo con los parametros
                        $params = [];
                        //iterar
                        for ($i = 0; $i < $nparam; $i++) {
                            array_push($params, $url[$i + 2]);
                        }
                        //pasarlos al metodo   
                        $controller->{$url[1]}($params);
                    } else {
                        $controller->{$url[1]}();
                    }
                } else {
                    $controller = new Errores();
                }
            } else {
                $controller->render();
            }
        } else {
            $controller = new Errores();
        }
    }
}
