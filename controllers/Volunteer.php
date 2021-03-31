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
        $msg="";
        $msg_data = [

            'msg' => $msg
          ];
        $this->view->rendor('volunteer/dashboard/index', $msg_data , true);
    }






    
    function reg_staff(){
        
        $msg_data=$this->model->reg_staff();
        $this->view->rendor('volunteer/dashboard/index', $msg_data , true);
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
    function confirmparticipants(){
      $this->model->confirmparticipants();
       
    }
    function volviewevent()
    {
        $data = $this->model->get_vol_activity_list();
        $this->view->rendor('volunteer/dashboard/viewNewActivities', $data, true);
        
    }


    function volleaderboard()
    {
        $data = $this->model->vol_leaderboard();
        $this->view->rendor('volunteer/dashboard/vol_leaderboard', $data, true);
    }
    function volpartcipate()
    {
        $data = $this->model->vol_participate();
        $this->view->rendor('volunteer/dashboard/vol_participate', $data, true);
    }

    function loadApplyStaffPosition()
    {
        $msg="";
        $pageData = [

            'msg' => $msg
          ];
        $this->view->rendor('volunteer/dashboard/vol_apply_staff_pos', $pageData, true);
    }
    function run_loadApplyStaffPosition()
    {
        $data = $this->model->run_loadApplyStaffPosition();
        $this->view->rendor('volunteer/dashboard/vol_apply_staff_pos', $data, true);
    }








    function edit_profile()
    {
        $data=$this->model->run_viewtoedit_profile();
        $this->view->rendor('volunteer/dashboard/edit_profile', $data, true);
    }
    function run_edit_profile()
    {
        $data=$this->model->run_edit_profile();
        $this->view->rendor('volunteer/dashboard/edit_profile', $data, true);
    }


    function change_password(){
        $this->model->change_password();
    }

    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }

}
