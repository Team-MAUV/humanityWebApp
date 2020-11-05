<?php

class Buy_Register extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->view->rendor('register/buy_register');
  }


  function buy_register()
  {
    $this->model->buy_register();
  }
}
