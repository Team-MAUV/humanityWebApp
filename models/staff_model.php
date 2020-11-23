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
      $date=$_POST['bidding_date'];
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
              $st = $this->db->prepare('INSERT INTO product(name,type,staff_id,date,description,starting_bid,product_path,volume) VALUES (:name,:type,:staff_id,:date,:description,:starting_bid,:product_path,:volume)');
              $st->execute(array(
                ':name' => $name,
                ':type' => $type,
                ':staff_id'=>$sid,
                ':date'=>$date,
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
}
else{
  $msg = "Your ID does not match";
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
