<?php

class Staff extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false) {
            Session::destroy();
            header('location: ../stafflogin');
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




    function Report()
    {
        $this->view->rendor('staff/dashboard/Report');
    }

    function requestleave()
    {
        $this->view->rendor('staff/dashboard/requestleave');
    }




    function media()
    {
        $this->view->rendor('staff/dashboard/media');
    }

    function notification()
    {
        $this->view->rendor('staff/dashboard/notification');
    }

    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}
