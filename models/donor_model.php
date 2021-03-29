<?php

class donor_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function donor_stat(){
    $did=Session::get('id');
    $stmt1 = $this->db->prepare('SELECT * FROM donor WHERE don_id=:did  ');        
    $stmt1->execute(array(
        ':did'=> $did,
      ));
     $donation = $stmt1->fetchAll();
     $count =  $stmt1->rowCount();


            if ($count > 0) {
              foreach ($donation as $tmp) :
                $donorid = $tmp['id'];
                $donorEmail = $tmp['email'];
                $donorAddress = $tmp['address'];
                $donorContact = $tmp['contact'];
              endforeach;
            }

     $stmt2 = $this->db->prepare('SELECT MAX(amount) AS maxim FROM donation WHERE don_id=:doid  ');        
    $stmt2->execute(array(
        ':doid'=> $donorid,
      ));
     $maxcon = $stmt2->fetchAll();

     $stmt2 = $this->db->prepare('SELECT MAX(date) AS maximd FROM donation WHERE don_id=:doid  ');        
    $stmt2->execute(array(
        ':doid'=> $donorid,
      ));
     $latestcon = $stmt2->fetchAll();

     $stmt3 = $this->db->prepare('SELECT COUNT(id) AS donc FROM donor ');        
     $stmt3->execute();
      $donnum = $stmt3->fetchAll();

      $stmt4 = $this->db->prepare('SELECT * FROM donation WHERE don_id=:doid ORDER BY date DESC LIMIT 3');        
      $stmt4->execute(array(
        ':doid'=> $donorid,
      ));
      $latedon = $stmt4->fetchAll();
      
 
  //All the data that has to be return from this functon is added to an associative array
  $pageData = [
    'donation'=> $donation,
    'maxcon'=>$maxcon,
    'latestcon'=>$latestcon,
    'donnum'=>$donnum,
    'latedon'=>$latedon,
    'donorEmail'=>$donorEmail ,
    'donorAddress' => $donorAddress,
    'donorContact' => $donorContact,
    'donorid' => $donorid
    
  ];
  return ($pageData);

  }
  function edit_profile(){
    
    $id=$_SESSION['idp'];
     $st1 = $this->db->prepare("SELECT donor.address, donor.contact, user.username FROM donor INNER JOIN user ON donor.userlogin_id = user.id WHERE donor.id = :id");
     $st1->execute(array(
       ':id'=>$id
     ));
     $data = $st1->fetchAll();
     $count = $st1->rowCount();
     if($count == 1){
       $msg = "";
     }else{
       $msg = "TRY AGAIN LATER!!!";
       $data = [];
     }
     
     $pagedata = [
       'data' => $data,
       'msg' => $msg
     ];
     
     return ($pagedata);
   }

 function save_new_profile_details(){
     if (!empty($_POST)) {

       $contact=$_POST['contact'];
       $address=$_POST['address'];
       $username=$_POST['username'];
       $pwd=$_POST['pwd'];
       $id=$_SESSION['idp'];
       
       $getdata = $this->db->prepare("SELECT userlogin_id FROM donor WHERE id = :id");
       $getdata->execute(array(
         ':id'=>$id
       ));
       $login_data = $getdata->fetchAll();
       foreach($login_data as $logdt) :
         $userlogin_id = $logdt['userlogin_id'];
       endforeach;

       $get_userdata = $this->db->prepare("SELECT password FROM user WHERE id = :id");
       $get_userdata->execute(array(
         ':id'=>$userlogin_id
       ));
       $userdata = $get_userdata->fetchAll();
       foreach($userdata as $udt) :
         $cr_pwd = $udt['password'];
       endforeach;
       
       if (password_verify($_POST['pwd'],  $cr_pwd)){
         $updatebuyer = $this->db->prepare("UPDATE donor SET address = :address, contact = :contact WHERE id = :id");
         $updatebuyer->execute(array(
           ':address'=>$address,
           ':contact'=>$contact,
           ':id'=>$id
         ));
     
         $updateuser = $this->db->prepare("UPDATE user SET username = :username WHERE id = :id");
         $updateuser->execute(array(
           ':username'=>$username,
           ':id'=>$userlogin_id
         ));
         header('location: ../donor/Index');
       }
     
     
     }
     header('location: ../donor/edit_profile');

 } 
 function save_new_pw_details(){
   if (!empty($_POST)){
    
     $oldpwd=$_POST['oldpwd'];
     $newpwd=$_POST['newpwd'];
     $rnewpwd=$_POST['rnewpwd'];
     $id=$_SESSION['idp'];

     $hasholdpw =  password_hash($oldpw, PASSWORD_DEFAULT);

     $getdata = $this->db->prepare("SELECT userlogin_id FROM donor WHERE id = :id");
     $getdata->execute(array(
       ':id'=>$id
     ));
     $login_data = $getdata->fetchAll();
     foreach($login_data as $logdt) :
       $userlogin_id = $logdt['userlogin_id'];
     endforeach;

     $get_userdata = $this->db->prepare("SELECT password FROM user WHERE id = :id");
     $get_userdata->execute(array(
       ':id'=>$userlogin_id
     ));
     $userdata = $get_userdata->fetchAll();
     foreach($userdata as $udt) :
       $cr_pwd = $udt['password'];
     endforeach;
     if (password_verify($_POST['oldpwd'],  $cr_pwd)){
       if($newpwd == $rnewpwd){
         $hashnewpw =  password_hash($newpwd, PASSWORD_DEFAULT);
         $updatepwd = $this->db->prepare("UPDATE user SET password = :password WHERE id = :id");
         $updatepwd->execute(array(
           ':password' => $hashnewpw,
           ':id' => $userlogin_id
         ));
       
     header('location: ../donor/Index');
     }
   }
 }
 header('location: ../donor/edit_profile');
}  

  public function Donationpayment(){

    echo $amount = $_POST['amount'];
    echo $_POST['dedication'];
    echo $_POST['paymentStatus'];
    echo $donTableId = $_POST['donorTableId'];
    echo $type =  $_POST['select-donation'];
    echo $_SESSION['id'];

    if($_POST['paymentStatus'] == "done"){
      echo "payment Success!";

      $stmt = $this->db->prepare("INSERT INTO donation(amount, type, don_id) VALUES (?, ?, ?)");

      $stmt->execute([$amount, $type, $donTableId]);


    }else{
      echo "payment Unsuccess!";

    }

  

  }


}