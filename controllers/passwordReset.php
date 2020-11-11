<?php

class passwordReset extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('passwordReset/resetPassword');
    }

    function run_passwordReset()
    {
        $this->model->run_passwordReset();
    }
}
