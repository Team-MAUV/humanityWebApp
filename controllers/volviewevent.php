<?php

class VolViewEvent extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('volunteer/view-events-template');
        

    }
    
    function run()
    {
        $this->model->run();
    }
}
