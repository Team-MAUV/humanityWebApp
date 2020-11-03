<?php

class Vol_Registration extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function run_vol_reg()
    {
        $st = $this->db->prepare("SELECT id FROM commissioner WHERE username= :login AND password = MD5(:password)");
        $st->execute(array(
            ':login' => $_POST['username'],
            ':password' => $_POST['password']

        ));

    

        $error = "Entered Username or Password is incorrect";
       
        $count = $st->rowCount();
        if ($count > 0) {
            // login

            
        } else {
            // show error
            set('error', $error);
            header('location: ../login');
        }
    }
}
