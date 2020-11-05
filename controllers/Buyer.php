<?php
class Buyer extends Controller
{
    function __construct()
    {
        parent::__construct();
        
        }

    function index()
    {
        $this->view->rendor('buyer/home_market');
    }    
    function home_index()
    {
        $this->view->rendor('buyer/buy-index');
            
    }
    function b_login()
    {
        $this->view->rendor('login/buy_login_page');
    }
    function help_sup()
    {
        $this->view->rendor('buyer/contact_us');
    }
    function join_in()
    {
        $this->view->rendor('buyer/b_register');
    }    
}