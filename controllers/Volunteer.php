<?php

class Volunteer extends Controller
{

    function __construct()
    {
        parent::__construct();
        
        }
    
    function index()
    {
        $this->view->rendor('volunteer/dashboard/index');
    }
    function voladdbene()
    {
        $this->view->rendor('volunteer/add-new-beneficiery-template');
    }
    function volviewevent()
    {
        $this->view->rendor('volunteer/view-events-template');
    }

}
