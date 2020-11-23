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

    /*function Market_module()
    {
        $this->view->rendor('staff/dashboard/Market_module');
    }
*/

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




    function staff_report()
    {
        $this->view->rendor('staff/dashboard/staff_report');
    }
    function upload_reports()
    {
        $this->view->rendor('staff/dashboard/upload_reports');
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

    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}
