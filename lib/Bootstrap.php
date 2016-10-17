<?php

class Bootstrap
{
    public function __construct()
    {
        session_start();
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (file_exists('controller/' . $url[0] . '.php')) {
            require 'controller/' . $url[0] . '.php';
            $controller = new $url[0]();
        }else{
            echo 'Error 404';
            exit;
        }

        if (file_exists('model/'.$url[0].'Model.php')) {
            $controller->loadModel($url[0]);
        }

        if (isset($url[1])) {
            if (method_exists($controller, $url[1])) {
                if (isset($url[2])) {
                    $controller->{$url[1]}($url[2]);
                } else {
                    $controller->{$url[1]}();
                }
            }else{
                $controller->index();
            }
        } else {
            $controller->index();
        }
    }
}