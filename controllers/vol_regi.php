<?php

class Login extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('reg/com-login-page');
    }

    function run()
    {
        $this->model->run();
    }
}