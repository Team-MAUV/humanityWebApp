<?php


class register_model extends Model

{

    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {
        echo "starting";

        if (!empty($_POST)) {
            // Post data not empty insert a new record
            // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
           // $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
           //$id ="vol7";

           $base=$this->db->prepare("SELECT `name` FROM `volunteer` ");
           $base->execute();
            $count=$base->rowCount();
            $count=$count+1;
            $id="VOL/HB/".$count;
           // mysqli_free_result($base);
        





            // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $nic = isset($_POST['nic']) ? $_POST['nic'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $address = isset($_POST['address']) ? $_POST['address'] : '';
            $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
            $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
            $prev_vol_exp = isset($_POST['prev_vol_exp']) ? $_POST['prev_vol_exp'] : '';
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
            $level = "temporary";
         
            $stmt = $this->db->prepare('INSERT INTO `volunteer` (`vol_id`, `name`,`nic`, `email`,`contact`, `address`,`dob`,`prev_vol_exp`,`gender`,`level`) VALUES (?, ?, ?,?, ?, ?,?,?,?,?)');
            
            $stmt->execute([$id, $name,$nic, $email,$contact,$address, $dob, $prev_vol_exp,$gender, $level]);
            
            // Output message
            echo 'Created Successfully!';
        }

        echo "end";
    }
}