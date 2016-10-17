<?php


class Search extends Controller
{

    public function index(){
        $this->view->msg = "search view";
        $this->view->render('search/index');
    }

    public function find(){
        $bandname = $_POST['bandname'];
        $data = $this->model->findBand($bandname);

        $this->view->msg = $data;


        $this->view->render('search/index');
    }


}