<?php
class Buyer extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('buyer/buyer-index');
    }

    function home(){
        $this->view->rendor('buyer/buyer-home');
    }
    
    function view_product(){
        $this->view->rendor('buyer/product-page');
    }
    function buy_register(){
        $this->view->rendor('register/buyRegForm');
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
