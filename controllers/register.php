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
   if($this->model->checkuser()){
    $this->model->run_don_register();
    $this->view->rendor('index/index');
   }
   else{
    echo "<script type='text/javascript'> 
    swal({
      title: 'Registration Failed!',
      text: 'This username already exsists!',

      icon: 'error',

  });
    </script>";
    
  }
  }
  function buyRegForm()
  {
    
    $this->view->rendor('register/buyRegForm');
  }

  function run_buy_register()
  {
    
    $this->model->run_buy_register();
    $this->view->rendor('index/index');
  }
}
