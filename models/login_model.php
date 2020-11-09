<?php

class login_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function run_com()
    {

        $st = $this->db->prepare("SELECT * FROM user WHERE username= :login AND password = MD5(:password) ");
        $st->execute(array(
            ':login' => $_POST['username'],
            ':password' => $_POST['password']
        ));

        $user = $st->fetchAll();
        //print_r($user);


        foreach ($user as $usr) :
            $role = $usr['role'];
        endforeach;

        Session::init();

        $error = "Invalid Username or Password!";
        $_SESSION['name'] = $_POST['username'];
        $id = $_POST["id"];

        $count = $st->rowCount();
        if ($count > 0) {

            Session::set('loggedIn', true);
            Session::set('name', $_POST['username']);
            Session::set('id', $id);
            Session::set('loggedIn', true);

            //Redirecting User Based on Role
            if ($role == 'commissioner') {
                header('location: ../Commissioner');
            }



            if ($role == 'volunteer') {
                header('location: ../Volunteer');
            }

            if ($role == 'donor') {
                header('location: ../Donor');
            }

            if ($role == 'buyer') {
                header('location: ../Buyer/profile');
            }

            if ($role == 'staff') {
                header('location: ../Staff');
            }
        } else {
            // show error
            Session::set('error', $error);
            header('location: ../login');
        }
    }
}
