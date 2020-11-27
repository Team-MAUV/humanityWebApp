<?php

class Register extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $msg="";
        $pageData = [

            'msg' => $msg
          ];
    $this->view->rendor('register/volRegForm', $pageData , true);
  }

  function run_vol_register()
  {

   $data= $this->model->run_vol_register();

   $this->view->rendor('register/volRegForm', $data, true);

   
  }

  function donRegForm()
  {
    // $msg="";
    //     $pageData = [

    //         'msg' => $msg
    //       ];
    $pageData=$this->model->run_check_user();
    $this->view->rendor('register/donRegForm', $pageData , true);
  }

  function run_don_register()
  {
   
    $data=$this->model->run_don_register();
    $this->view->rendor('register/donRegForm', $data, true);
 
  }
  function buyRegForm()
  {
    $msg="";
        $pageData = [

            'msg' => $msg
          ];
    
    $this->view->rendor('register/buyRegForm', $pageData , true);
  }

  function run_buy_register()
  {
    
    $data=$this->model->run_buy_register();
    $this->view->rendor('register/buyRegForm', $data, true);
  }
}
