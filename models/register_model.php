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
                    
                    $msg = "Form data submitted successfully!";

                    //Email Notification for Successfully Registered & waiting for approval

                    $to = $email;
                    $subject = 'Wait for the Approval!';
                    $rec_name =  $name;

                  

                    $message = '<h5> Hello '.$rec_name.', </h5>
                    <p> Your registration application submitted Successfully! You will be notified regarding the status of your application soon!  </p>';


                    $message .= '<h4>***Humanity Web App - Powered by Team MAUV***</h4>';

                    $headers ="From: Humanity<tzuchihumanity@gmail.com>\r\n";
                    $headers .="Reply-To: tzuchihumanity@gmail.com\r\n";
                    $headers .= "Content-type: text/html\r\n";

                    Email::email_send($to,$rec_name, $subject, $message, $headers);


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
      
      $pw = password_hash($password, PASSWORD_DEFAULT);


      $stmt2=$this->db->prepare('INSERT INTO `user` (`username`,`password`,`role`) VALUES ( ?,?,?)');
      $stmt2->execute([$username, $pw, $role]);

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

      $stmt = $this->db->prepare('INSERT INTO `donor` (`name`,`nic`, `email`,`contact`, `address`,`userlogin_id`) VALUES ( :name, :nic,:email,:contact, :address, :id)');
      $stmt->execute(array(
        ':name'=>$name,
        ':nic'=>$nic,
        ':email'=>$email,
        ':contact'=>$contact,
        ':address'=>$address,
        ':id' => $id,
       
      ));

      $custom_id=$this->db->prepare("SELECT id FROM donor WHERE nic=:nic");
      $custom_id->execute(array(
        ':nic' => $_POST['nic'],
      ));
      $cid_result = $custom_id->fetchAll();
      $count = $custom_id->rowCount();
      if ($count > 0) {
        foreach ($cid_result as $cidtmp) :
          if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
            $cid ="DONHB00".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
            $cid ="DONHB0".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])>0){
            $cid ="DONHB".$cidtmp['id'];
          };
          
        endforeach;

      $cidstmt = $this->db->prepare('UPDATE `donor` SET don_id=:cid WHERE nic=:nic');
      $cidstmt->execute(array(
        ':nic' => $_POST['nic'],
        ':cid'=>$cid,
      ));
    }

     
      $msg = "Form data submitted successfully!";
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
      $pw = password_hash($password, PASSWORD_DEFAULT);
      $stmt2=$this->db->prepare('INSERT INTO `user` (`username`,`password`,`role`) VALUES ( ?,?,?)');
      $stmt2->execute([$username, $pw, $role]);

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

      $stmt = $this->db->prepare('INSERT INTO `buyer` (`name`,`nic`, `email`,`contact`, `address`,`userlogin_id`) VALUES ( :name, :nic,:email,:contact, :address, :id)');
      $stmt->execute(array(
        ':name'=>$name,
        ':nic'=>$nic,
        ':email'=>$email,
        ':contact'=>$contact,
        ':address'=>$address,
        ':id' => $id,
       
      ));
      $custom_id=$this->db->prepare("SELECT id FROM buyer WHERE nic=:nic");
      $custom_id->execute(array(
        ':nic' => $_POST['nic'],
      ));
      $cid_result = $custom_id->fetchAll();
      $count = $custom_id->rowCount();
      if ($count > 0) {
        foreach ($cid_result as $cidtmp) :
          if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
            $cid ="BUYHB00".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
            $cid ="BUYHB0".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])>0){
            $cid ="BUYHB".$cidtmp['id'];
          };
        endforeach;

      $cidstmt = $this->db->prepare('UPDATE `buyer` SET buy_id=:cid WHERE nic=:nic');
      $cidstmt->execute(array(
        ':nic' => $_POST['nic'],
        ':cid'=>$cid,
      ));
    }
      $msg = "Form data submitted successfully!";
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
