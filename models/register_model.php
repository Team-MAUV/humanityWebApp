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
      // Post data not empty insert a new record
      // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank


    //  $base2 = $this->db->prepare("SELECT `name` FROM `donor` ");
     // $base2->execute();
    //  $count2 = $base2->rowCount();
     // $count2 = $count2 + 1;
     // $don_id = "DON/HB/" . $count2;

      // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $nic = isset($_POST['nic']) ? $_POST['nic'] : '';
      $email = isset($_POST['email']) ? $_POST['email'] : '';
      $address = isset($_POST['address']) ? $_POST['address'] : '';
      $username = isset($_POST['username']) ? $_POST['username'] : '';
      $password = isset($_POST['password']) ? $_POST['password'] : '';
      $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
      $role="donor";
      $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

      /*$usercheck=$this->db->prepare("SELECT id FROM user WHERE username= :checkun  ");
      $usercheck->execute(array(
        ':checkun' => $_POST['username']
      ));
      $count = $usercheck->rowCount();
      if ($count > 0) {
        header("location:".$_SERVER['HTTP_REFERER']);
        echo "<script type='text/javascript'> 
 alert('This username already exists!') 
 </script>"; 
 
      }*/
      
    //  else{



      $stmt2=$this->db->prepare('INSERT INTO `user` (`username`,`password`,`role`,`email`) VALUES ( ?,?,?,?)');
      $stmt2->execute([$username, $password, $role,$email]);

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

      $stmt = $this->db->prepare('INSERT INTO `donor` (`name`,`nic`, `email`,`contact`, `address`,`username`,`password`,`gender`,`userlogin_id`) VALUES ( :name, :nic,:email,:contact, :address, :username,:password,:gender,:id)');
      $stmt->execute(array(
        ':name'=>$name,
        ':nic'=>$nic,
        ':email'=>$email,
        ':contact'=>$contact,
        ':address'=>$address,
        ':username'=>$username,
        ':password' =>$password,
        ':gender'=>$gender,
        ':id' => $id,
       
      ));
     
      echo 'Created Successfully!';
      header('location: ../index');
    }
    else{
      echo 'failed';
    }

    echo "end";
  //}
  }

}

  public function run_buy_register()
  {
    //echo "starting";

    if (!empty($_POST)) {
      // Post data not empty insert a new record
      // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank


      /*$base3 = $this->db->prepare("SELECT `name` FROM `buyer` ");
      $base3->execute();
      $count3 = $base3->rowCount();
      $count3 = $count3 + 1;
      $id = "BUY/HB/" . $count3;*/

      // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $nic = isset($_POST['nic']) ? $_POST['nic'] : '';
      $email = isset($_POST['email']) ? $_POST['email'] : '';
      $address = isset($_POST['address']) ? $_POST['address'] : '';
      $username = isset($_POST['username']) ? $_POST['username'] : '';
      $password = isset($_POST['password']) ? $_POST['password'] : '';
      $contact = isset($_POST['contact']) ? $_POST['contact'] : '';
      $role="buyer";
      $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

      $stmt2=$this->db->prepare('INSERT INTO `user` (`username`,`password`,`role`,`email`) VALUES ( ?,?,?,?)');
      $stmt2->execute([$username, $password, $role,$email]);

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

      $stmt = $this->db->prepare('INSERT INTO `buyer` (`name`,`nic`, `email`,`contact`, `address`,`username`,`password`,`gender`,`userlogin_id`) VALUES ( :name, :nic,:email,:contact, :address, :username,:password,:gender,:id)');
      $stmt->execute(array(
        ':name'=>$name,
        ':nic'=>$nic,
        ':email'=>$email,
        ':contact'=>$contact,
        ':address'=>$address,
        ':username'=>$username,
        ':password' =>$password,
        ':gender'=>$gender,
        ':id' => $id,
       
      ));
     
      echo 'Created Successfully!';
    }
    else{
      echo 'failed';
    }

    echo "end";
  }

}



public function checkuser()
{
  $usercheck=$this->db->prepare("SELECT id FROM user WHERE username= :checkun  ");
  $usercheck->execute(array(
    ':checkun' => $_POST['username']
  ));
  $count = $usercheck->rowCount();
  if ($count > 0) {
    return false;

  }
  else{
    
    return true;
  }
}

}
