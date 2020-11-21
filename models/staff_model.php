<?php

class staff_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

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



    }





