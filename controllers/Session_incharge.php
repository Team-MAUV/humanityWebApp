<?php

class Session_incharge extends Controller
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
        $this->view->rendor('session_incharge/dashboard/index');
    }

    
    function media_gallary()
    {
        $this->view->rendor('session_incharge/dashboard/media_gallary');
    }
    function attendance_marking ()
    {
        $this->view->rendor('session_incharge/dashboard/attendance_marking');
    }




    

    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}
