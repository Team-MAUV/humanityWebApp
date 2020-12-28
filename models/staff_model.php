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
            $st = $this->db->prepare('INSERT INTO bid_session(start_date_time,starting_bid,product_id) VALUES (:start_date_time,:starting_bid,:product_id)');
              $st->execute(array(
                ':start_date_time'=>$date,
                ':starting_bid'=>$starting_bid,
                ':product_id'=>$cidtmp['id'],

              ));

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
        $bscustom_id=$this->db->prepare("SELECT id FROM bid_session WHERE ((start_date_time=:start_date_time) AND (product_id=:product_id))");
        $bscustom_id->execute(array(
          ':start_date_time' => $date,
          ':product_id'=>$cidtmp['id'],
        ));
        $bscid_result = $bscustom_id->fetchAll();
        $bscount2 = $bscustom_id->rowCount();
        if ($bscount2 > 0) {
          foreach ($bscid_result as $bscidtmp) :
            if(strlen($bscidtmp['id'])==1 && strlen($bscidtmp['id'])>0){
              $bscustomid ="BSNHB00".$bscidtmp['id'];
            }else if(strlen($bscidtmp['id'])==2 && strlen($bscidtmp['id'])>0){
              $bscustomid ="BSNHB0".$bscidtmp['id'];
            }else if(strlen($bscidtmp['id'])>0){
              $bscustomid ="BSNHB".$bscidtmp['id'];
            };
          endforeach;


        $bsidstmt = $this->db->prepare('UPDATE `bid_session` SET session_id=:bscustomid WHERE ((start_date_time=:start_date_time) AND (product_id=:product_id))');
        $bsidstmt->execute(array(
          ':bscustomid'=>$bscustomid,
          ':start_date_time' => $date,
          ':product_id'=>$cidtmp['id'],
        ));
      }
              $msg = "Product added successfully!";
            } 
          else {
              $msg = "Adding product  Failed!";
            }
          }
        } else {
          $msg = 'Please add a Product!';
        }



      $pageData = [

        'msg' => $msg
      ];
      return $pageData;
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
              $day_no = $_POST['day_no'];
              $date = $_POST['date'];
              $reason = $_POST['reason'];

              if($_POST['staff_id']==$_SESSION['id']){

              $stmt = $this->db->prepare('INSERT INTO `leave_request` (`name`,`date`, `no_days`,`reason`, `staff_id`) VALUES ( ?, ?,?, ?, ?)');

              $stmt->execute([$name, $date, $day_no, $reason, $staff_id]);

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
          endforeach;
           
              Session::set('loggedIn-sin', true);
              Session::set('id', $id);
              Session::set('name', $name);
              header('location: ../Session_incharge');
            
           

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

  
 }
