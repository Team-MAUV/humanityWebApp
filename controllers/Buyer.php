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
        $data = $this->model->view_buyerdash();
        $this->view->rendor('buyer/dashboard/buyer_main', $data ,true);
    }

    
    
    
    function view_product(){
      
        $data = $this->model->view_product();
        $this->view->rendor('buyer/dashboard/view_product', $data ,true);
    }
    
    function add_bid(){
      
        $data = $this->model->add_bid();
        $this->view->rendor('buyer/dashboard/bid_msg', $data, true);
          
    }

    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
    
}
