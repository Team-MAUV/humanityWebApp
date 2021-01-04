<?php
class Buyer extends Controller
{
    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn-buy');
        if ($logged == false) {
            Session::destroy();
            header('location: ../login');
            exit;
        }
    }

    function index()
    {
        
        $this->view->rendor('buyer/dashboard/buyer_main');
    }

    
    
    function view_glass(){
        $data = $this->model->view_glass();
        $this->view->rendor('buyer/dashboard/view_product', $data ,true);
    }
    function view_plastic(){
        $data = $this->model->view_plastic();
        $this->view->rendor('buyer/dashboard/view_product', $data ,true);
    }
    function view_paper(){
        $data = $this->model->view_paper();
        $this->view->rendor('buyer/dashboard/view_product', $data ,true);
    }
    function view_electronic(){
        $data = $this->model->view_electronic();
        $this->view->rendor('buyer/dashboard/view_product', $data ,true);
    }
    function view_other(){
        $data = $this->model->view_other();
        $this->view->rendor('buyer/dashboard/view_product', $data ,true);
    }


    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
    
}
