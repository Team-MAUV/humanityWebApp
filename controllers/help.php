<?php

class Help extends Controller{

    function __construct() {
        parent::__construct();
        
    }

    function index() {
        $this->view->rendor('help/index');
    }

    public function other($arg = false) {
        require 'models/help_model.php';
        $model = new Help_Model();
        $this->view->rendor('help/index', $data);
        
        // $this->view->blah = $model->blah();
    }

    public function vcon() {
        $data = [
            'title' => "View content",
            'content' => "This is some random content.",
            'num' => 11332
        ];
        $this->view->rendor('help/con', $data);
    }

}