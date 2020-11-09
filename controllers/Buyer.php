<?php
class Buyer extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('buyer/market-buyer-index');
    }

    function home(){
        $this->view->rendor('buyer/market-buyer-home');
    }
    function profile(){
        $this->view->rendor('buyer/market-buyer-profile');
    }
    function cart(){
        $this->view->rendor('buyer/cart');
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
