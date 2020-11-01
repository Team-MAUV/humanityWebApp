<?php

class VolAddBene extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('volunteer/add-new-beneficiery-template');
        

    }
    
    function run()
    {
        $this->model->run();
    }
}
