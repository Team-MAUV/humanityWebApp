<?php

class homePage extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->rendor('homePage/donation_index');
    }

   



}