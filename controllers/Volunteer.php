<?php

class Volunteer extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn-vol');
        Session::get('level');
        Session::get('vol_points');
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
    function addbeneficiery(){
        $msg_data=$this->model->addbeneficiery();
        $this->view->rendor('volunteer/dashboard/addNewBeneficiary', $msg_data, true);
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
