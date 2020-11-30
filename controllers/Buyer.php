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

    
    
    function view_product(){
        $this->view->rendor('buyer/dashboard/view_product');
    }
    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
    
}
