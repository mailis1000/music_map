<?php


class Dashboard extends Controller
{


    /**
     * Dashboard constructor.
     */
    public function __construct()
    {
        if(isset($_SESSION['login'])){
            parent::__construct();
        }else{
            header('location: '.BASE.'auth/index');
            exit;
        }
    }

    //toob bändilisti dashboardile
    public function index()
    {
        $data = $this->model->getBandList();
        $this->view->msg = $data;
        $this->view->render('dashboard/index');
    }

    //võtab data, suunab saveBandi
    public function save(){
        $data=array(
            "bandname" =>$_POST['bandname'],
            "genre" =>$_POST['genre'],
            "country" =>$_POST['country']
        );

        $result = $this->model->saveBand($data);
        if($result){
            header('location: '.BASE.'dashboard/index');
        }else{
            echo "Error 500";
            exit;
        }
    }


    public function view($bandname){
        $data = $this->model->findBand($bandname);
        $this->view->msg = $data;
        $this->view->render('dashboard/index');
    }


}