<?php


class Index extends Controller
{
    /**
     *   Index constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->view->msg = "Index kontroller view";
        $this->view->render('index/index');
    }

    public function listing(){
    $this->view->msg = "Index kontroller view listing";
    $this->view->render('index/search');
}

}