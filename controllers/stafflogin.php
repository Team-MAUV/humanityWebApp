<?php

class stafflogin extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('login/stafflogin_page');
    }

    function run()
    {
        $this->model->run();
    }
}
