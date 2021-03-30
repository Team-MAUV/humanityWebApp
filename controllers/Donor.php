<?php
class Donor extends Controller
{
    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn-don');
        if ($logged == false) {
            Session::destroy();
            header('location: ../login');
            exit;
        }
    }

    function index()
    {
        $data = $this->model->donor_stat();
        $this->view->rendor('donor/dashboard/donor_home', $data, true);
    }
    function edit_profile(){
        $data = $this->model->edit_profile();
        $this->view->rendor('donor/dashboard/donor_edit_profile', $data ,true);
    }

    function save_new_profile_details()
    {
       $this->model->save_new_profile_details();
    }
    function save_new_pw_details()
    {
      $this->model->save_new_pw_details();
      
    } 



    function Donationpayment()
    {
        $data = $this->model->Donationpayment();
        // $this->view->rendor('donor/dashboard/donor_donationSuccess', $data, true);
    }









    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}