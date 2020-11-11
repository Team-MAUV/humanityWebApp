<?php

class Volunteer extends Controller
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
        $this->view->rendor('volunteer/dashboard/index');
    }
    function voladdbene()
    {
        $this->view->rendor('volunteer/dashboard/addNewBeneficiary');
    }
    function volviewevent()
    {
        $this->view->rendor('volunteer/dashboard/viewNewActivities');
    }
    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }

}
