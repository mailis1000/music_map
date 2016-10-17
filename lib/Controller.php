<?php


class Controller implements controllerInterface
{


    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->view = new View();
    }

    public function index()
    {
    }

    public function loadModel($name){
        $name = $name.'Model';
        require 'model/'.$name.'.php';
        $this->model = new $name();
    }


}