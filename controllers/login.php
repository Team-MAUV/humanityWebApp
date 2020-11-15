<?php

class login extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('login/index');
    }

    function forgotPassword()
    {
        $this->view->rendor('login/forgotPassword');
    }

    function run_check_email(){
        $this->model->run_check_email();
    }

    function resetPassword()
    {
        $this->view->rendor('login/resetPassword');
    }

    function run_resetPassword(){
        $this->model->run_resetPassword();
    }
    

    function pwUpdateSuccess(){
        $this->view->rendor('login/pwUpdateSuccess');;
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
