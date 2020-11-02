<?php

class Volunteer extends Controller
{

    function __construct()
    {
        parent::__construct();
        
        }
    
    function index()
    {
        $this->view->rendor('volunteer/vol-template');
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

?>