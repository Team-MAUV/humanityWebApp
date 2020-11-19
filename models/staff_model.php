<?php

class staff_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }
/*
  public function newVolActivity(){
    if (!empty($_POST)) {
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $venue = isset($_POST['venue']) ? $_POST['venue'] : '';
      $p_count = isset($_POST['p_count']) ? $_POST['p_count'] : '';
      $started = isset($_POST['started']) ? $_POST['started'] : '';
      $finished = isset($_POST['finished']) ? $_POST['finished'] : '';

      $get_comid = $this->db->prepare("SELECT id FROM commissioner WHERE com_id= :comid ");
      $get_comid->execute(array(
        ':comid' => $_POST['id']
      ));

      $result = $get_comid->fetchAll();
      $count = $get_comid->rowCount();


      if ($count > 0) {
        foreach ($result as $tmp) :
          $cid = $tmp['id'];
        endforeach;
      

        $st = $this->db->prepare('INSERT INTO vol_activity(name,venue,start_date_time,end_date_time,participant_count,com_id) VALUES (:name,:venue,:start,:end,:p_count,:id)');
        $st->execute(array(
          ':name'=>$name,
          ':venue'=>$venue,
          ':start'=>$started,
          ':end'=>$finished,
          ':p_count'=>$p_count,
          ':id' => $cid
        ));
      $custom_id=$this->db->prepare("SELECT id FROM vol_activity WHERE (name=:name AND start_date_time=:start)");
      $custom_id->execute(array(
        ':name' => $_POST['name'],
        ':start' => $_POST['started'],
      ));
      $cid_result = $custom_id->fetchAll();
      $count2 = $custom_id->rowCount();
      if ($count2 > 0) {
        foreach ($cid_result as $cidtmp) :
          if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
            $customid ="VACTHB00".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
            $customid ="VACTHB0".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])>0){
            $customid ="VACTHB".$cidtmp['id'];
          };
        endforeach;

      $cidstmt = $this->db->prepare('UPDATE `vol_activity` SET activity_id=:customid WHERE (name=:name AND start_date_time=:start)');
      $cidstmt->execute(array(
        ':name' => $_POST['name'],
        ':start' => $_POST['started'],
        ':customid'=>$customid,
      ));
    }




      }
  }
  }

*/

    }





