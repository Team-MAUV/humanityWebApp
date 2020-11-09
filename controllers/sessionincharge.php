<?php

class Sessionincharge extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location: ../login');
            exit;
        }
    }


    function index()
    {
        $this->view->rendor('session-incharge/dashboard/index');
    }

    
    function add_product()
    {
        $this->view->rendor('session-incharge/dashboard/add_product');
    }
    function access_product()
    {
        $this->view->rendor('session-incharge/dashboard/access_product');
    }




    

    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}
