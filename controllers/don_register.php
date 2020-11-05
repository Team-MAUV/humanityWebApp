<?php

class Don_Register extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->view->rendor('register/don_register');
  }


  function don_register()
  {
    $this->model->don_register();
  }
}
