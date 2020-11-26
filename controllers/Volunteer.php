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
        $msg="";
        $pageData = [

            'msg' => $msg
          ];
        $this->view->rendor('volunteer/dashboard/addNewBeneficiary', $pageData , true);
    }
    function addbeneficiery(){
        $msg_data=$this->model->addbeneficiery();
        $this->view->rendor('volunteer/dashboard/addNewBeneficiary', $msg_data , true);
    }
    function volviewevent()
    {
        $data = $this->model->get_vol_activity_list();
        $this->view->rendor('volunteer/dashboard/viewNewActivities', $data, true);
        
    }
    function volleaderboard()
    {
        $this->view->rendor('volunteer/dashboard/vol_leaderboard');
    }
    function volpartcipate()
    {
        $this->view->rendor('volunteer/dashboard/vol_participate');
    }





    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }

}
