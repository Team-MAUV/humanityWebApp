<?php

class Staff extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn-stf');
        if ($logged == false) {
            Session::destroy();
            header('location: ../login');
            exit;
        }
    }


    function index()
    {
        $this->view->rendor('staff/dashboard/index');
    }

    /*function Market_module()
    {
        $this->view->rendor('staff/dashboard/Market_module');
    }
*/
    function add_product()
    {
        $this->view->rendor('staff/dashboard/add_product');
    }
    function access_product()
    {
        $this->view->rendor('staff/dashboard/access_product');
    }




    function staff_report()
    {
        $this->view->rendor('staff/dashboard/staff_report');
    }
    
    function requestleave()
    {
      
        $this->view->rendor('staff/dashboard/requestleave');
    
    }
    
    function staff_gallery()
    {
        $this->view->rendor('staff/dashboard/staff_gallery');
    }

    function staff_notification()
    {
        $this->view->rendor('staff/dashboard/staff_notification');
    }

    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}
