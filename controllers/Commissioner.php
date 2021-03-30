<?php

class Commissioner extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn-com');
        if ($logged == false) {
            Session::destroy();
            header('location: ../login');
            exit;
        }
    }


    function index()
    {
        
          $data2 = $this->model->get_view_com_list();
        $this->view->rendor('commissioner/dashboard/index', $data2, true);
       
    }
    function run_add_com(){
        $data = $this->model->run_add_com();
        $this->view->rendor('commissioner/dashboard/index', $data, true);
    }

    function view_com_list()
    {
        $data2 = $this->model->get_view_com_list();
        $this->view->rendor('commissioner/dashboard/index', $data2, true);
    }
    function edit_profile()
    {
        $data=$this->model->run_viewtoedit_profile();
        $this->view->rendor('commissioner/dashboard/edit_profile' ,$data, true); 
       
    }
    function run_edit_profile()
    {
        $this->model->run_edit_profile();
        
    }


    function change_password(){
        $this->model->change_password();
    }
    function volunteer()
    {
        $data = $this->model->get_reg_vol_profiles();
        $this->view->rendor('commissioner/dashboard/volunteer', $data, true);
    }
    function delete_volunteer(){
        $this->model->delete_volunteer();
    }

    function search_volunteer()
    {
        $data = $this->model->run_search_volunteer();
        $this->view->rendor('commissioner/dashboard/volunteer', $data, true);
    }

    function run_accept_vol_request(){
        $this->model->run_accept_vol_request();
    }

    function vol_activities(){
        $this->view->rendor('commissioner/dashboard/vol_activities');  
    }





    function staff()
    {
        $data = $this->model->get_reg_staff_profiles();
        $this->view->rendor('commissioner/dashboard/staff', $data, true);
    }
    function staff_viewprofile()
    {
     
        $this->view->rendor('commissioner/dashboard/staff_viewprofile');
    }

    function delete_staff(){
        $this->model->delete_staff();
    }
    function delete_buyer(){
        $this->model->delete_buyer();
    }
    function buyer()
    {
        $data = $this->model->get_reg_buyer_profiles();
        $this->view->rendor('commissioner/dashboard/buyer', $data, true);
    }

    function donor()
    {
        $data = $this->model->get_reg_donor_profiles();
        $this->view->rendor('commissioner/dashboard/donor', $data, true);
    }

    

    function newVolActivity()
    {
        $this->view->rendor('commissioner/dashboard/newVolActivity');
        $this->model->newVolActivity();
    }

    function viewVolActivity()
    {
        $data = $this->model->get_vol_activity_list();
        $this->view->rendor('commissioner/dashboard/viewVolActivitylist', $data, true);
    }
    function search_volunteer_activity()
    {
        $data = $this->model->run_search_volunteer_activity();
        $this->view->rendor('commissioner/dashboard/viewVolActivitylist', $data, true);
    }

    function projectReports()
    {
        $data = $this->model->projectReports();
        $this->view->rendor('commissioner/dashboard/projectReports', $data, true);
        
    }
    function leaveRequests()
    {
      $data = $this->model->get_leaveRequests();
        $this->view->rendor('commissioner/dashboard/leaveRequests', $data, true);
    }

    function search_leaverequest()
    {
        $data = $this->model->run_search_leaverequest();
        $this->view->rendor('commissioner/dashboard/leaveRequest', $data, true);
    }


    function sessionincharge()
    {
        $data = $this->model->fetch_sessionIncharge_details();
        $this->view->rendor('commissioner/dashboard/sessionincharge',$data, true);
    }




  

    function beneficiaryCases()
    {
        $data = $this->model->get_beneficiary_case();
        $this->view->rendor('commissioner/dashboard/beneficiaryCases', $data, true);
    }

    function media()
    {
        $data = $this->model->get_images_display();

        $this->view->rendor('commissioner/dashboard/media', $data, true);
    }

    function mediaUpload()
    {
        $data = $this->model->get_images_display();
        $this->view->rendor('commissioner/dashboard/mediaUpload', $data, true);
    }

    function run_mediaUpload()
    {
        $msg_data =  $this->model->run_mediaUpload();
        $this->view->rendor('commissioner/dashboard/mediaUpload', $msg_data, true);
    }
    function view_reports(){
        $this->model->view_reports();
    }




    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}
