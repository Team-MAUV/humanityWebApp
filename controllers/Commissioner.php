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
        $this->view->rendor('commissioner/dashboard/index');
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
        $this->view->rendor('commissioner/dashboard/leaveRequests');
    }

    function sessionincharge()
    {
        $this->view->rendor('commissioner/dashboard/sessionincharge');
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
