<?php

class staff_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function add_product(){
    if (!empty($_POST)) {

      $name=$_POST['name'];
      $type=$_POST['category'];
      $volume=$_POST['volume'];
      $description=$_POST['description'];
      $date=$_POST['bidding_start_date'];
      $enddate=$_POST['bidding_end_date'];
      $starting_bid=$_POST['starting_bid'];
      date_default_timezone_set('Asia/Colombo');

      $cr_time = date("Y-m-d H:i:s");
      $bidendint=strtotime($enddate);
      $crtimeint=strtotime($cr_time);
     
      $get_cat = $this->db->prepare("SELECT * From product Where type = :prdtype AND availability = 1");
      $get_cat->execute(array(
        ':prdtype' => $type
      ));
      $prd_exist = $get_cat->fetchAll();
      $prd_count = $get_cat->rowCount();
     
      foreach($prd_exist as $prd_exist) :
        $end_time = $prd_exist['bid_end_time'];
      endforeach;
      
      if($prd_count == 0 || $bidendint < $crtimeint){


        $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/humanity/public/product_images/';
        $save_path = 'product_images/';

        $dest_path = $target_dir . basename($_FILES['product_image']['name']);

        $image_path = $save_path . basename($_FILES['product_image']['name']);
      // Check to make sure the image is valid
        if (!empty($_FILES['product_image']['tmp_name']) && getimagesize($_FILES['product_image']['tmp_name'])) {
          if (file_exists($dest_path)) {
            $msg = "Image already exists, please choose another or rename that image.";
          } else if ($_FILES['product_image']['size'] > 500000) {
            $msg = "Image file size too large, please choose an image less than 500kb.";
          } else {


            $get_staffid = $this->db->prepare("SELECT id FROM staff WHERE staff_id= :staffid  ");
            $get_staffid->execute(array(
              ':staffid' => $_SESSION['id']
            ));

            $result =  $get_staffid->fetchAll();
            $count =  $get_staffid->rowCount();


            if ($count > 0) {
              foreach ($result as $tmp) :
                $sid = $tmp['id'];
              endforeach;

              //Inserting Fetched Volunteer id to beneficiary case table
              $st = $this->db->prepare('INSERT INTO product(name,type,staff_id,date,bid_end_time,description,starting_bid,product_path,volume) VALUES (:name,:type,:staff_id,:date,:enddate,:description,:starting_bid,:product_path,:volume)');
              $st->execute(array(
                ':name' => $name,
                ':type' => $type,
                ':staff_id'=>$sid,
                ':date'=>$date,
                ':enddate'=>$enddate,
                ':description'=>$description,
                ':starting_bid'=>$starting_bid,
                ':product_path'=>$image_path,
                ':volume'=>$volume,

              ));

  // Everything checks out now we can move the uploaded image
              move_uploaded_file($_FILES['product_image']['tmp_name'], $dest_path);
            }
              //Generating custom id
            $custom_id=$this->db->prepare("SELECT id FROM product WHERE product_path=:product_path");
            $custom_id->execute(array(
              ':product_path' => $image_path,
            ));
            $cid_result = $custom_id->fetchAll();
            $count2 = $custom_id->rowCount();
            if ($count2 > 0) {
              foreach ($cid_result as $cidtmp) :
            

                if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
                  $customid ="PROHB00".$cidtmp['id'];
                }else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
                  $customid ="PROHB0".$cidtmp['id'];
                }else if(strlen($cidtmp['id'])>0){
                  $customid ="PROHB".$cidtmp['id'];
                };
              endforeach;

              $cidstmt = $this->db->prepare('UPDATE `product` SET product_id=:customid WHERE product_path=:product_path');
              $cidstmt->execute(array(
                ':product_path' => $image_path,
                ':customid'=>$customid,
              ));
        
              $msg = "Product added successfully!";

              //sql event to set availability == 0 at the bid end time
              $event = $this->db->prepare('SET GLOBAL event_scheduler = ON');
              $event->execute();

              $updatest = $this->db->prepare('CREATE EVENT customid 
                                            ON SCHEDULE AT :enddate
                                            DO 
                                            UPDATE product SET availability = 0 WHERE product_id = :customid;
                                            ');

              $updatest->execute(array(
                ':enddate' => $enddate,
                ':customid' => $customid
              ));

            } 
            else {
              $msg = "Adding product  Failed!";
            }
          }


        } else {
          $msg = 'Please add a Product!';
        }
      }else{
        $msg = "Product category alredy exists";
      }

    
      $pageData = [

        'msg' => $msg
      ];
      return $pageData;
    }
  }

  public function access_product(){
    //select all available products
    $st1 = $this->db->prepare("SELECT * FROM product WHERE availability = 1");
    $st1->execute();
    $avbprdts = $st1->fetchAll();
    $avbprdtscount = $st1->rowCount();
    
    
    $st2 = $this->db->prepare('SELECT * FROM product WHERE availability = 0 AND won_buy_id IS NULL');
    $st2->execute();
    $notavbprdts = $st2->fetchAll();
    $notavbprdtscount = $st2->rowCount();
   
    //select all the products sold at the bid session
    $st3 = $this->db->prepare("SELECT product.id, product.product_id, product.name, product.type, product.highest_bid_amount, product.collected_status, product.description, product.date,
                        product.bid_end_time, product.product_path, buyer.buy_id, buyer.name AS buy_name FROM product LEFT JOIN buyer ON product.won_buy_id = buyer.id
                        WHERE product.availability = 0 AND product.won_buy_id IS NOT NULL ORDER BY product.bid_end_time DESC");
    $st3->execute();
    $soldprdts = $st3->fetchAll();
    $soldprdtscount = $st3->rowCount();
    
    if($avbprdtscount == 0){
      $msgavb = "No Cruntly Available Products!!!";
    }else{
      $msgavb = "";
    }
    if($notavbprdtscount == 0){
      $msgnavb = "No Records Available";
    }else{
      $msgnavb = "";
    }
    if($soldprdtscount == 0){
      $msgsld = "No Sold Product Records Available"; 
    }else{
      $msgsld = "";
    }

    $pageData = [
      'msgavb' => $msgavb,
      'msgnavb' => $msgnavb,
      'avbprdts' => $avbprdts,
      'notavbprdts' => $notavbprdts,
      'soldprdts' => $soldprdts,
      'msgsld' => $msgsld
    ];
    return $pageData;


  }

  public function view_product(){
    
    $pid = $_GET['prdid'];
    $st1 = $this->db->prepare("SELECT * FROM product WHERE id = :pid");
    $st1 ->execute(array(
      ':pid' => $pid
    ));
    $data = $st1->fetchAll();
    $count = $st1->rowCount();
    if($count != 1){
      $msg = "error!!!!";
    }
    $st2 = $this->db->prepare("SELECT bid.product_id, bid.buy_id, bid.bid_amount, bid.time,
                          buyer.buy_id AS buyer_id, buyer.name FROM bid INNER JOIN buyer 
                          ON bid.buy_id = buyer.id WHERE bid.product_id = :pid ORDER BY bid.time DESC");
    $st2->execute(array(
      ':pid' => $pid
    ));
    $bidlist = $st2->fetchAll();
    $bidcount = $st2->rowCount();
    if($bidcount == 0){
      $bidlistmsg = "No records available!";
    }else{
      $bidlistmsg = "";
    }


    $pageData = [
      'msg' => $msg,
      'data' => $data,
      'bidlist' => $bidlist,
      'bidlistmsg' => $bidlistmsg
    ];

    return $pageData;
  }
  public function update_product(){
    $pid = $_GET['prdid'];
    $st1 = $this->db->prepare('SELECT * FROM product WHERE id = :pid');
    $st1->execute(array(
      ':pid' => $pid
    ));
    $data = $st1->fetchAll();
    $count = $st1->rowCount();
    if($count == 0){
      $msg = "ERROR!!!";
    }else{
      $msg = "";
    }
    $pageData = [
      'msg' => $msg,
      'data' => $data
    ];
    return $pageData;

  }

  public function save_update_product(){
    $pid = $_GET['pid'];
    if (!empty($_POST)) {

      $name=$_POST['name'];
      $volume=$_POST['volume'];
      $description=$_POST['description'];
      $date=$_POST['bidding_start_date'];
      $enddate=$_POST['bidding_end_date'];
      $starting_bid=$_POST['starting_bid'];
    
      $get_staffid = $this->db->prepare("SELECT id FROM staff WHERE staff_id= :staffid  ");
      $get_staffid->execute(array(
        ':staffid' => $_SESSION['id']
      ));

      $result =  $get_staffid->fetchAll();
      $count =  $get_staffid->rowCount();


      if ($count > 0) {
        foreach ($result as $tmp) :
          $sid = $tmp['id'];
        endforeach;
      }


      $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/humanity/public/product_images/';
      $save_path = 'product_images/';

      $dest_path = $target_dir . basename($_FILES['product_image']['name']);

      $image_path = $save_path . basename($_FILES['product_image']['name']);
      // Check to make sure the image is valid
      if (!empty($_FILES['product_image']['tmp_name']) && getimagesize($_FILES['product_image']['tmp_name'])) {
        if ($_FILES['product_image']['size'] > 500000) {
          $msg = "Image file size too large, please choose an image less than 500kb.";
        } else {
          $updatepd = $this->db->prepare('UPDATE product SET name = :name, date = :date, 
                                        bid_end_time = :enddate, description = :description, starting_bid = :startbid,
                                        product_path = :prdpath, volume = :volume, staff_id = :sid WHERE id = :pid');
          $updatepd->execute(array(
            ':name' => $name,
            ':sid'=>$sid,
            ':date'=>$date,
            ':enddate'=>$enddate,
            ':description'=>$description,
            ':startbid'=>$starting_bid,
            ':prdpath'=>$image_path,
            ':volume'=>$volume,
            ':pid'=>$pid
          )); 
          move_uploaded_file($_FILES['product_image']['tmp_name'], $dest_path); 
          $msg = "Product Updated Succesfully";                            
        }
      }else{
        
        $updatepd = $this->db->prepare('UPDATE product SET name = :name, date = :date, 
                                        bid_end_time = :enddate, description = :description, starting_bid = :startbid,
                                        volume = :volume, staff_id = :sid WHERE id = :pid');
          $updatepd->execute(array(
            ':name' => $name,
            ':sid'=>$sid,
            ':date'=>$date,
            ':enddate'=>$enddate,
            ':description'=>$description,
            ':startbid'=>$starting_bid,
            ':volume'=>$volume,
            ':pid'=>$pid
          )); 
          $msg = "Product Updated Succesfully";                            
      }

    }else{
      $msg = "ERROR!!!";
    }
    $st1 = $this->db->prepare('SELECT * FROM product WHERE id = :pid');
    $st1->execute(array(
      ':pid' => $pid
    ));
    $data = $st1->fetchAll();

    $pageData = [
      'msg' => $msg,
      'data' => $data
    ];
    return $pageData;

  }
  public function collected_product(){
    $pid = $_GET['prdid'];
    $st1 = $this->db->prepare("UPDATE product SET collected_status = 1 WHERE id = :pid AND won_buy_id IS NOT NULL");
    $st1->execute(array(
      ':pid' => $pid
    ));

  }

  public function delete_product(){
    $pid = $_GET['prdid'];
    $check = $this->db->prepare('SELECT * FROM product WHERE id = :pid');
    $check ->execute(array(
      ':pid' => $pid
    ));
    $data = $check->fetchAll();
    foreach ($data as $dt) :
      $bidstart = $dt['date'];
    endforeach;
    date_default_timezone_set('Asia/Colombo');

    $cr_time = date("Y-m-d H:i:s");
    $bidstint=strtotime($bidstart);
    $crtimeint=strtotime($cr_time);
    if($bidstint > $crtimeint){
      $st1 = $this->db->prepare("DELETE FROM product WHERE id = :pid");
      $st1 ->execute(array(
        ':pid' => $pid
      ));
    }  
  }
public function requestleave(){
  if (!empty($_POST)) {
    $get_staffid = $this->db->prepare("SELECT id FROM staff WHERE staff_id= :staffid  ");
    $get_staffid->execute(array(
      ':staffid' => $_SESSION['id']
    ));

    $result =  $get_staffid->fetchAll();
    $count =  $get_staffid->rowCount();


    if ($count > 0) {
      foreach ($result as $tmp) :
        $sid = $tmp['id'];
      endforeach;

              // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
              $name = $_POST['name'];
              $staff_id = $sid;
              $tdate = $_POST['tdate'];
              $fdate = $_POST['fdate'];
              $reason = $_POST['reason'];

              if($_POST['staff_id']==$_SESSION['id']){

              $stmt = $this->db->prepare('INSERT INTO `leave_request` (`name`,`from_date`, `to_date`,`reason`, `staff_id`) VALUES ( ?, ?,?, ?, ?)');

              $stmt->execute([$name, $fdate, $tdate, $reason, $staff_id]);

              $msg = "Leave Request submitted successfully!";

              }
              else{
                $msg = "Your ID does not match";
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



  public function run_sic_login(){

echo "In staff Model";
        Session::init();

        $error = "Invalid Username or Password!";

        $st = $this->db->prepare("SELECT * FROM session_incharge WHERE username= :id AND passcode= :passcode");
        $st->execute(array(
            ':id' => $_POST['username'],
            ':passcode'=>$_POST['password']
        ));
        $user = $st->fetchAll();
        $count = $st->rowCount();

       
        if($count>0){

          foreach ($user as $usr) :
            $id = $usr['username'];
            $name =  $usr['name'];
            $inchargeId = $usr['incharge_id'];
          endforeach;
           
              Session::set('loggedIn-sin', true);
              Session::set('id', $id);
              Session::set('name', $name);
              Session::set('inchargeId', $inchargeId);
              header('location: ../sessionIncharge');
            
           

         } else {
          // show error
          Session::set('error', $error);
          header('location: ../staff/sessionInchargeLogin');
}

  }

public function addreport()
{
 
  if (isset($_FILES['file'], $_POST['staff_id'])) {
    if($_POST['staff_id']==$_SESSION['id']){
    $msg = "Please Upload a file";
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/humanity/public/project_report/';
    $save_path = 'project_report/';

    $dest_path = $target_dir . basename($_FILES['file']['name']);
    $file_path = $save_path . basename($_FILES['file']['name']);

    if (!empty($_FILES['file']['tmp_name']) && filesize($_FILES['file']['tmp_name'])) {
      if (file_exists($dest_path)) {
        $msg = "This File already exists, please choose another or rename that file.";
      } else if ($_FILES['file']['size'] > 500000) {
        $msg = "File size is too large, please choose a file less than 500kb.";
      } else {

        //Getting id from Volunteer table that is corresponding to entered volunteer ID
        $get_stfid = $this->db->prepare("SELECT id FROM staff WHERE staff_id= :stfid  ");
        $get_stfid->execute(array(
          ':stfid' => $_POST['staff_id']
        ));
        $title=$_POST['title'];
        $result = $get_stfid->fetchAll();
        $count = $get_stfid->rowCount();


        if ($count > 0) {
          foreach ($result as $tmp) :
            $id = $tmp['id'];
          endforeach;

          //Inserting Fetched Volunteer id to beneficiary case table
          $st = $this->db->prepare('INSERT INTO project_report(staff_id,title,report_path) VALUES (:id,:title,:path)');
          $st->execute(array(
            ':id' => $id,
            ':title'=>$title,
            ':path' => $file_path
          ));

          move_uploaded_file($_FILES['file']['tmp_name'], $dest_path);
          //Generating custom id
          $custom_id=$this->db->prepare("SELECT id FROM project_report WHERE report_path=:report_path");
    $custom_id->execute(array(
      ':report_path' => $file_path,
    ));
    $cid_result = $custom_id->fetchAll();
    $count2 = $custom_id->rowCount();
    if ($count2 > 0) {
      foreach ($cid_result as $cidtmp) :
        if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
          $customid ="RPTHB00".$cidtmp['id'];
        }else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
          $customid ="RPTHB0".$cidtmp['id'];
        }else if(strlen($cidtmp['id'])>0){
          $customid ="RPTHB".$cidtmp['id'];
        };
      endforeach;

    $cidstmt = $this->db->prepare('UPDATE `project_report` SET report_id=:customid WHERE report_path=:report_path');
    $cidstmt->execute(array(
      ':report_path' => $file_path,
      ':customid'=>$customid,
    ));
  }
          $msg = "File uploaded successfully!";
        } else {
          $msg = "File upload  Failed!";
        }
      }
    } else {
      $msg = 'Please upload a file!';
    }
    }
  else{
    $msg = "Staff ID does not match!";
  }
}

  $pageData = [

    'msg' => $msg
  ];
  return $pageData;
}


public function upload_reports(){


  $st = $this->db->prepare('SELECT * FROM project_report WHERE status="pending" ORDER BY id ');
  $st->execute();
  $pendings = $st->fetchAll();

//Approved reports
$stmt2 = $this->db->prepare('SELECT * FROM project_report WHERE status="approved" ORDER BY id ');        
$stmt2->execute();
$approved = $stmt2->fetchAll();

//rejected reports
$stmt3 = $this->db->prepare('SELECT * FROM project_report WHERE status="rejected" ORDER BY id ');
$stmt3->execute();
$rejects = $stmt3->fetchAll();

  
//All the data that has to be return from this functon is added to an associative array
$pageData = [
'approved' => $approved,
'pendings' => $pendings,
'rejects'=>$rejects,

];
return ($pageData);


}
public function run_viewtoedit_profile(){
  $stf_id=$_SESSION['idp'];
  $st1 = $this->db->prepare("SELECT address, contact FROM staff WHERE id = :id");
  $st1->execute(array(
    ':id'=>$stf_id
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
public function run_edit_profile(){

                
  $address = $_POST['address'];
  $contact = $_POST['contact'];
  $password=$_POST['pwd'];
  $id=$_SESSION['idp'];
  $getdata = $this->db->prepare("SELECT userlogin_id FROM staff WHERE id = :id");
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
  
  if (password_verify($_POST['pwd'],  $password)){
    $updatebuyer = $this->db->prepare("UPDATE staff SET address = :address, contact = :contact WHERE id = :id");
    $updatebuyer->execute(array(
      ':address'=>$address,
      ':contact'=>$contact,
      ':id'=>$id
    ));
    header('location: ../staff/index');
  }
  header('location: ../staff/edit_profile');
}
public function change_password(){
  if (!empty($_POST)){

    $oldpwd=$_POST['oldpwd'];
    $newpwd=$_POST['newpwd'];
    $rnewpwd=$_POST['rnewpwd'];
    $id=$_SESSION['idp'];

    $hasholdpw =  password_hash($oldpwd, PASSWORD_DEFAULT);

    $getdata = $this->db->prepare("SELECT userlogin_id FROM staff WHERE id = :id");
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
        header('location: ../staff/Index');
      }
    }
  }
  header('location: ../staff/edit_profile');

}

}

