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

    
    function media_gallery()
    {
        $this->view->rendor('session-incharge/dashboard/media_gallery');
    }
    function attendance_marking ()
    {
        $this->view->rendor('session-incharge/dashboard/attendance_marking');
    }




    

    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}
