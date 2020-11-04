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
            header('location: ../login');
            exit;
        }
    }


    function index()
    {
        $this->view->rendor('staff/dashboard/index');
    }

    function volunteer()
    {
        $this->view->rendor('staff/dashboard/volunteer');
    }

    function staff()
    {
        $this->view->rendor('commissioner/dashboard/staff');
    }

    function buyer()
    {
        $this->view->rendor('commissioner/dashboard/buyer');
    }

    function donor()
    {
        $this->view->rendor('commissioner/dashboard/donor');
    }


    function newVolActivity()
    {
        $this->view->rendor('commissioner/dashboard/newVolActivity');
    }

    function viewVolActivity()
    {
        $this->view->rendor('commissioner/dashboard/viewVolActivity');
    }

    function projectReports()
    {
        $this->view->rendor('commissioner/dashboard/projectReports');
    }

    function leaveRequests()
    {
        $this->view->rendor('commissioner/dashboard/leaveRequests');
    }

    function sessionincharge()
    {
        $this->view->rendor('commissioner/dashboard/sessionincharge');
    }

    function beneficiaryCases()
    {
        $this->view->rendor('commissioner/dashboard/beneficiaryCases');
    }

    function media()
    {
        $this->view->rendor('commissioner/dashboard/media');
    }



    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}
