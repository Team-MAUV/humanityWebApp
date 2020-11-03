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

    function run_com()
    {
        $this->model->run_com();
    }
}
