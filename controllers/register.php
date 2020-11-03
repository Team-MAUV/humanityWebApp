<?php

class register extends Controller
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
}
