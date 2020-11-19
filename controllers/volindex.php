<?php

class volindex extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->rendor('homePage/buy_market_index');
    }



}