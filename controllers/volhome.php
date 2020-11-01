<?php

class VolHome extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('volunteer/vol-template');
        

    }
    
    function run()
    {
        $this->model->run();
    }
}
