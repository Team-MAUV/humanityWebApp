<?php

class Register extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    echo "Page not found";
  }

  function vol_register()
  {
    $this->view->rendor('register/vol_register');
  }

  function run_com()
  {
    $this->model->run_com();
  }

  function register()
  {
    $this->view->rendor('register/vol_register');
    $name=$_POST['name'];
    $nic=$_POST['nic'];
    $email=$_POST['email'];
    $count=$this->model->check_volunteer($name,$nic,$email);
    if(count($count)>0){
      echo 'This User Already Exsists';
    }
    else{
      $data=array(
        'name'=>$_POST['name'],
        'nic'=>$_POST['nic'],
        'email'=>$_POST['email'],
        'address'=>$_POST['address'],
        'contact'=>$_POST['contact'],
        'dob'=>$_POST['dob'],
        'prev_vol_exp'=>$_POST['prev_vol_exp'],
        'gender'=>$_POST['gender']

      );
      echo 'Correct';
      $this->model->insert_volunteer($data);
    }
    header('location:register');
  }
}
?>
