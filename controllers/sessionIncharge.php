<?php

class sessionIncharge extends Controller
{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn-sin');
        Session::get('vol_activityId');
        Session::get('vol_activity');
        Session::get('session_start_time');
   
        if ($logged == false) {
            Session::destroy();
            header('location: ../staff/sessionInchargeLogin');
            exit;
        }
    }


    function index()
   {
    


  $msg_data=$this->model->index();

      $this->view->rendor('session_incharge/dashboard/index',$msg_data , true);
    }

    

    function media_upload()
    {
        $msg="";
        $pageData = [

            'msg' => $msg
          ];
          $this->view->rendor('session_incharge/dashboard/media_upload',$pageData , true);
        }

function run_media_upload(){
       $msg_data=$this->model->run_media_upload();
       $this->view->rendor('session_incharge/dashboard/media_upload',$msg_data , true);
    }
    function media_gallary()
    {
        $msg_data=$this->model->media_display();
        $this->view->rendor('session_incharge/dashboard/media_gallary',$msg_data,true);
    }
    function marking_attendance()
    {
        $msg_data=$this->model->marking_attendance();
        $this->view->rendor('session_incharge/dashboard/marking_attendance',$msg_data,true);
    }
    function add_mark_attendance()
    {
        $this->model->marking_attendance();
     
    }

    function unconfirm_attendance()
    {
        $this->view->rendor('session_incharge/dashboard/unconfirm_attendance');
    }

    function end_session()
    {
        $this->view->rendor('session_incharge/dashboard/end_session');
    }

    function close_session()
    {
        $this->model->closeSession();
    }


   
    

    function logout()
    {
        Session::destroy();
        header('location: ../staff/sessionInchargeLogin');
        exit;
    }
}
