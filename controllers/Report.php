<?php

class Report extends Controller{

    function __construct() {
        parent::__construct();
        
    }

    function receipt() {
        
        $this->model->receipt();
        // $this->view->rendor('report/receipt');
    }

 

}