<?php

class Vol_Register extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->view->rendor('register/vol_register');
  }


  function vol_register()
  {
    $this->model->vol_register();
  }
}
