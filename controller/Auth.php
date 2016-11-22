<?php


class Auth extends Controller
{

    /**
     * Auth constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->view->render('auth/index');
    }

    //sisse logimine
    public function auth(){
        $username = $_POST['username'];
        $password = $_POST['password'];


        if($this->model->auth($username, $password)){
            $_SESSION['login']=$username;
            header('location: '.BASE.'dashboard/index');
        }else{
            $this->view->msg = 'Wrong username or password';
            $this->view->render('auth/index');
        }
    }

    //välja logimine
    public function logout(){
        unset($_SESSION['login']);
        session_destroy();
        header('location: '.BASE.'index/index');
        exit;
    }

    //uus kasutaja
    public function addnew(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        if($this->model->addlogin($username, $password, $email)){
            $this->view->msg='Added user: '.$username;
            $this->view->render('index/index');
        }else{
            $this->view->msg='An error occured while adding an user';
            $this->view->render('index/index');
        }

    }

    /*public function view($bandname){
        $data = $this->model->findBand($bandname);
        $this->search->msg = $data;
        $this->search->render('search');
    }*/
}