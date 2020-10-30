<?php

class Login_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $st = $this->db->prepare("SELECT id FROM commissioner WHERE username= :login AND password = MD5(:password)");
        $st->execute(array(
            ':login' => $_POST['username'],
            ':password' => $_POST['password']

        ));

        Session::init();

        $error = "Entered Username or Password is incorrect";
        $_SESSION['name'] = $_POST['username'];
        $id = $_POST["id"];

        // $data = $st->fetchAll();
        //print_r($data);
        $count = $st->rowCount();
        if ($count > 0) {
            // login

            Session::set('loggedIn', true);
            Session::set('name', $_POST['username']);
            Session::set('id', $id);
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        } else {
            // show error
            Session::set('error', $error);
            header('location: ../login');
        }
    }
}
