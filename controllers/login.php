<?php

class login extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('login/com_login_page');
    }

    function vol_login()
    {
        $this->view->rendor('login/vol_login_page');
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
