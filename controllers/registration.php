<?php

class Login extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function regvolunteer()
    {
        $this->view->rendor('volunteer/registration');
    }

    function regbuyer()
    {
        $this->view->rendor('buyer/registration');
    }
    function regdoner()
    {
        $this->view->rendor('doner/registration');
    }

    function run()
    {
        $this->model->run();
    }
}