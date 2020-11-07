<?php

class login extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('login/user_login');
    }

    


    function run_com()
    {
        $this->model->run_com();
    }

    function run_vol()
    {
        $this->model->run_vol();
    }
}
