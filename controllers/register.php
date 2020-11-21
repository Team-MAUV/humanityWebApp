<?php

class Register extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->view->rendor('register/volRegForm');
  }

  function run_vol_register()
  {

   $data= $this->model->run_vol_register();

   $this->view->rendor('register/volRegForm', $data, true);

   
  }

  function donRegForm()
  {
    $this->view->rendor('register/donRegForm');
  }

  function run_don_register()
  {
   
    $data=$this->model->run_don_register();
    $this->view->rendor('register/donRegForm', $data, true);
 
  }
  function buyRegForm()
  {
    
    $this->view->rendor('register/buyRegForm');
  }

  function run_buy_register()
  {
    
    $data=$this->model->run_buy_register();
    $this->view->rendor('register/buyRegForm', $data, true);
  }
}
