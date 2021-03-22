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

    function edit_profile()
    {
        $data = $this->model->edit_profile();
        $this->view->rendor('buyer/dashboard/buy_edit_profile', $data ,true);
    }

    function save_new_profile_details()
    {
        $this->model->save_new_profile_details();
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
