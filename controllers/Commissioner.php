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

    function volunteer()
    {
        $data = $this->model->get_reg_vol_profiles();
        $this->view->rendor('commissioner/dashboard/volunteer', $data, true);
    }

    function search_volunteer()
    {
        $data = $this->model->run_search_volunteer();
        $this->view->rendor('commissioner/dashboard/volunteer', $data, true);
    }

    function run_accept_vol_request(){
        $this->model->run_accept_vol_request();
    }

    function staff()
    {
        $data = $this->model->get_reg_staff_profiles();
        $this->view->rendor('commissioner/dashboard/staff', $data, true);
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
        $this->view->rendor('commissioner/dashboard/projectReports');
    }

    function leaveRequests()
    {
        $data = $this->model->get_leaveRequests();
        $this->view->rendor('commissioner/dashboard/leaveRequests', $data, true);
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




    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}
