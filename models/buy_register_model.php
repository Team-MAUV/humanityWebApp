<?php


class buy_register_model extends Model

{

    public function __construct()
    {
        parent::__construct();
    }

    public function buy_register()
    {
        echo "starting";

        if (!empty($_POST)) {
            // Post data not empty insert a new record
            // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
         

        //   $base3=$this->db->prepare("SELECT `name` FROM `buyer` ");
        //    $base3->execute();
            // $count3=$base3->rowCount();
            // $count3=$count3+1;
            // $id="BUY/HB/".$count3;
  

        





            // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $nic = isset($_POST['nic']) ? $_POST['nic'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $address = isset($_POST['address']) ? $_POST['address'] : '';
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
            
            
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
            
            $stmt = $this->db->prepare('INSERT INTO `buyer` ( `name`,`nic`, `email`,`contact`, `address`,`username`,`password`,`gender`) VALUES ( ?, ?,?, ?, ?,?,?,?)');
            
            $stmt->execute([$name,$nic, $email,$contact,$address, $username, $password,$gender]);
            
            // Output message
            echo 'Created Successfully!';
        }

        echo "end";
    }
}