<?php

class sessionIncharge extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn-sin');
        if ($logged == false) {
            Session::destroy();
            header('location: ../staff/sessionInchargeLogin');
            exit;
        }
    }


    function index()
    {
        $this->view->rendor('session_incharge/dashboard/index');
    }

    function media_upload()
    {
        $this->view->rendor('session_incharge/dashboard/media_upload');
    }
    function media_gallary()
    {
        $this->view->rendor('session_incharge/dashboard/media_gallary');
    }
    function marking_attendance()
    {
        $this->view->rendor('session_incharge/dashboard/marking_attendance');
    }

    function unconfirm_attendance()
    {
        $this->view->rendor('session_incharge/dashboard/unconfirm_attendance');
    }

    function end_session()
    {
        $this->view->rendor('session_incharge/dashboard/end_session');
    }

    function close_session()
    {
        $this->model->closeSession();
    }


   
    

    function logout()
    {
        Session::destroy();
        header('location: ../staff/sessionInchargeLogin');
        exit;
    }
}
