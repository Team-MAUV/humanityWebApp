<?php

class Staff extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn-stf');
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

function edit_profile()
{
    
    $this->view->rendor('staff/dashboard/edit_profile'); 
   
}

    function add_product()
    {
        $msg="";
        $pageData = [

            'msg' => $msg
          ];
        $this->view->rendor('staff/dashboard/add_product', $pageData , true);
    }
    function run_add_product()
    {
        $msg_data=$this->model->add_product();
        $this->view->rendor('staff/dashboard/add_product', $msg_data , true);
    }



    function access_product()
    {
        $this->view->rendor('staff/dashboard/access_product');
    }
    function manage_bidsession()
    {
        $this->view->rendor('staff/dashboard/manage_bidsession');
    }

  

    function staff_report()
    {$msg="";
        $pageData = [

            'msg' => $msg
          ];
          $this->view->rendor('staff/dashboard/staff_report', $pageData , true);
    }
    
    function addreport(){
        $msg_data=$this->model->addreport();
        $this->view->rendor('staff/dashboard/staff_report', $msg_data , true);
    }

    function upload_reports()
    {
        $msg_data=$this->model->upload_reports();
        $this->view->rendor('staff/dashboard/upload_reports', $msg_data , true);
    }
    function requestleave()
    {
        $msg="";
        $pageData = [

            'msg' => $msg
          ];
        $this->view->rendor('staff/dashboard/requestleave', $pageData , true);
        
    }
    
    function run_requestleave()
    {
        $msg_data=$this->model->requestleave();
        $this->view->rendor('staff/dashboard/requestleave',$msg_data , true);
    }

    
    function staff_gallery()
    {
        $this->view->rendor('staff/dashboard/staff_gallery');
    }

    function staff_notification()
    {
        $this->view->rendor('staff/dashboard/staff_notification');
    }


    
    function sessionInchargeLogin()
    {
        $this->view->rendor('staff/dashboard/siclogin');
    }

   
    function run_sic_login()
    {
        $this->model->run_sic_login();
    }

    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }


}
