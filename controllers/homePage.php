<?php

class homePage extends Controller {

    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->rendor('homePage/donation_index');
    }
    function volunteering(){
        $this->view->rendor('homePage/volunteer_index');
    }
    function market(){
        $this->view->rendor('homePage/buy_market_index');
    }
   



}