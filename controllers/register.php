<?php

class Register extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->view->rendor('register/vol_register');
  }



  function register()
  {
    $this->model->register();
  }
}
