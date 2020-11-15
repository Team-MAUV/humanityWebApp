<?php
class Donor extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->rendor('donor/donorHome-index');
    }
}