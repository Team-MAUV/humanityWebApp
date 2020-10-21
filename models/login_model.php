<?php 

class Login_Model extends Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function run() {
        $st = $this->db->prepare("SELECT id FROM users WHERE login= :login AND password = :password ");
        $st->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));

       // $data = $st->fetchAll();
         //print_r($data);
        $count = $st->rowCount();
        if($count > 0) {
            // login
            Session::init();
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        } else {
            // show error
            header('location: ../login');
        }
        
    }
}