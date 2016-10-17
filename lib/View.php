<?php

class View
{
    public $msg;

    public function render($name){
        $url = $_GET['url'];

        require 'view/header.php';
        if ($url == 'index/search') {
            require 'search.php';
        } else {
            require 'view/'.$name.'.php';
        }
        require 'view/footer.php';
    }
}