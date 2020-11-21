<?php

class staff_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }
  public function add_product(){
    if(!empty($_POST)){
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $category = isset($_POST['Category']) ? $_POST['Category'] : '';
      $volume = isset($_POST['volume']) ? $_POST['volume'] : '';
      $starting_bid = isset($_POST['startingbid']) ? $_POST['startingbid'] : '';
      $bidding_date = isset($_POST['Bidding_Date']) ? $_POST['Bidding_Date'] : '';
      $description = isset($_POST['subject']) ? $_POST['subject'] : '';

  public function requestleave(){
    if (!empty($_POST)) {
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $date = isset($_POST['date']) ? $_POST['date'] : '';
      $day_no = isset($_POST['day_no']) ? $_POST['day_no'] : '';
      $reason = isset($_POST['reason']) ? $_POST['reason'] : '';
     

      $get_staff_id = $this->db->prepare("SELECT id FROM staff WHERE staff_id= :staff_id ");
      $get_staff_id->execute(array(
        ':staff_id' => $_POST['id']
      ));

      $result = $get_staff_id->fetchAll();
      $count = $get_staff_id->rowCount();


      if ($count > 0) {
        foreach ($result as $tmp) :
          $sid = $tmp['id'];
        endforeach;
      

        $st = $this->db->prepare('INSERT INTO leave_request(name,date,day_no,reason,staff_id) VALUES (:name,:date,:day_no,:reason,:id)');
        $st->execute(array(
          ':name'=>$name,
          ':date'=>$date,
          ':day_no'=>$day_no,
          ':reason'=>$reason,
         
          ':id' => $sid
        ));
      $custom_id=$this->db->prepare("SELECT leave_id FROM leave_request WHERE (staff_id=:staff_id AND date=:date)");
      $custom_id->execute(array(
        ':staff_id' => $_POST['staff_id'],
        ':date' => $_POST['date'],
      ));
      $sid_result = $custom_id->fetchAll();
      $count2 = $custom_id->rowCount();
      if ($count2 > 0) {
        foreach ($sid_result as $sidtmp) :
          if(strlen($sidtmp['id'])==1 && strlen($sidtmp['id'])>0){
            $customid ="LR00".$sidtmp['id'];
          }else if(strlen($sidtmp['id'])==2 && strlen($sidtmp['id'])>0){
            $customid ="LR0".$sidtmp['id'];
          }else if(strlen($sidtmp['id'])>0){
            $customid ="LR".$sidtmp['id'];
          };
        endforeach;

      $sidstmt = $this->db->prepare('UPDATE `leave_request` SET leave_id=:customid WHERE (staff_id=:staff_id AND date=:date)');
      $sidstmt->execute(array(
        ':staff_id' => $_POST['staff_id'],
        ':date' => $_POST['date'],
        ':customid'=>$customid,
      ));
    }




      }
  }
  }


      $stmt2=$this->db->prepare('INSERT INTO `product` (`name`,`type`,`date`,`description`,`starting_bid`,`volume`) VALUES ( :name. :type, :date, :description, :starting_bid, :volume)');
      $stmt2->execute(array(
        ':name'=>$name,
        ':type'=>$category,
        ':date'=>$bidding_date,
        ':description'=>$description,
        ':starting_bid'=>$starting_bid,
        ':volume'=>$volume,
       
      ));
//product name should be unique????
      $get_volid = $this->db->prepare("SELECT id FROM product WHERE name= :pname  ");
      $get_volid->execute(array(
        ':pname' => $_POST['name']
      ));

      $result = $get_volid->fetchAll();
      $count = $get_volid->rowCount();


     
      if ($count > 0) {
        foreach ($result as $cidtmp) :
          if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
            $cid ="PRDHB00".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
            $cid ="PRDHB0".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])>0){
            $cid ="PRDHB".$cidtmp['id'];
          };
          
        endforeach;

        $cidstmt = $this->db->prepare('UPDATE `product` SET product_id=:cid WHERE name=:name');
        $cidstmt->execute(array(
        ':name' => $_POST['name'],
        ':cid'=>$cid,
        ));
      }
    }
  }

    




}





