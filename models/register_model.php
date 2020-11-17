<?php

class Register_model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

public function run_vol_register(){
    if (!empty($_POST)) {

      
          //Check whether user already exist
          $nic_check = $_POST['nic'];

          $st = $this->db->prepare("SELECT * FROM volunteer WHERE nic=:nic");

          $st->execute(array(
            ':nic' => $nic_check
          ));
          $row_count = $st->rowCount();

                if($row_count>0){
                  $msg = "User already Exist!";
                 
                }else{


                    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
                    $name = $_POST['name'];
                    $nic = $_POST['nic'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $contact = $_POST['contact'];
                    $dob = $_POST['dob'];
                    $prev_vol_exp = $_POST['prev_vol_exp'];
                    $gender = $_POST['gender'];


                    $stmt = $this->db->prepare('INSERT INTO `volunteer` (`name`,`nic`, `email`,`contact`, `address`,`dob`,`prev_vol_exp`,`gender`) VALUES ( ?, ?,?, ?, ?,?,?,?)');

                    $stmt->execute([$name, $nic, $email, $contact, $address, $dob, $prev_vol_exp, $gender]);
                    
                    $msg = "Form data submitter successfully!";
                    header('location: ../register');
                }
    }else{
      $msg = "Data fields are empty";
    }

    $pageData = [
       'msg' => $msg
      
     ];
  
    return ($pageData);
}

  public function run_don_register()
  {
   // echo "starting";

   if (!empty($_POST)) {

      
    //Check whether user already exist
    $username_check = $_POST['username'];

    $st = $this->db->prepare("SELECT * FROM user WHERE username=:username");

    $st->execute(array(
      ':username' => $username_check
    ));
    $row_count = $st->rowCount();

          if($row_count>0){
            $msg = "User already Exist!";
           
          }else{
      $name = $_POST['name'];
      $nic = $_POST['nic'];
      $email = $_POST['email'];
      $address =$_POST['address'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $contact = $_POST['contact'];
      $role="donor";
      $gender =$_POST['gender'];



      $stmt2=$this->db->prepare('INSERT INTO `user` (`username`,`password`,`role`) VALUES ( ?,?,?)');
      $stmt2->execute([$username, $password, $role]);

      $get_volid = $this->db->prepare("SELECT id FROM user WHERE username= :uname  ");
      $get_volid->execute(array(
        ':uname' => $_POST['username']
      ));

      $result = $get_volid->fetchAll();
      $count = $get_volid->rowCount();


      if ($count > 0) {
        foreach ($result as $tmp) :
          $id = $tmp['id'];
        endforeach;

      $stmt = $this->db->prepare('INSERT INTO `donor` (`name`,`nic`, `email`,`contact`, `address`,`gender`,`userlogin_id`) VALUES ( :name, :nic,:email,:contact, :address, :gender,:id)');
      $stmt->execute(array(
        ':name'=>$name,
        ':nic'=>$nic,
        ':email'=>$email,
        ':contact'=>$contact,
        ':address'=>$address,
        ':gender'=>$gender,
        ':id' => $id,
       
      ));
     
      $msg = "Form data submitter successfully!";
                    header('location: ../register/donRegForm');
                }
    }
  }
  else{
      $msg = "Data fields are empty";
    }

    $pageData = [
       'msg' => $msg
      
     ];
  
    return ($pageData);
}


  public function run_buy_register()
  {

    if (!empty($_POST)) {

      
      //Check whether user already exist
      $username_check = $_POST['username'];
  
      $st = $this->db->prepare("SELECT * FROM user WHERE username=:username");
  
      $st->execute(array(
        ':username' => $username_check
      ));
      $row_count = $st->rowCount();
  
            if($row_count>0){
              $msg = "User already Exist!";
             
            }
            else{
      $name =$_POST['name'];
      $nic = $_POST['nic'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $username =$_POST['username'];
      $password =$_POST['password'];
      $contact = $_POST['contact'];
      $role="buyer";
      $gender =$_POST['gender'];

      $stmt2=$this->db->prepare('INSERT INTO `user` (`username`,`password`,`role`) VALUES ( ?,?,?)');
      $stmt2->execute([$username, $password, $role]);

      $get_volid = $this->db->prepare("SELECT id FROM user WHERE username= :uname ");
      $get_volid->execute(array(
        ':uname' => $_POST['username']
      ));

      $result = $get_volid->fetchAll();
      $count = $get_volid->rowCount();


      if ($count > 0) {
        foreach ($result as $tmp) :
          $id = $tmp['id'];
        endforeach;

      $stmt = $this->db->prepare('INSERT INTO `buyer` (`name`,`nic`, `email`,`contact`, `address`,`gender`,`userlogin_id`) VALUES ( :name, :nic,:email,:contact, :address, :gender,:id)');
      $stmt->execute(array(
        ':name'=>$name,
        ':nic'=>$nic,
        ':email'=>$email,
        ':contact'=>$contact,
        ':address'=>$address,
        ':gender'=>$gender,
        ':id' => $id,
       
      ));
     
      $msg = "Form data submitter successfully!";
                    header('location: ../register/buyRegForm');
                }
    }
  }
  else{
      $msg = "Data fields are empty";
    }

    $pageData = [
       'msg' => $msg
      
     ];
  
    return ($pageData);
}

}
