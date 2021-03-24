<?php

class SessionIncharge_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }



  public function closeSession() {

    echo $_SESSION['id'] ;

    // $usersName =  $_SESSION['name'] ;

    $st= $this->db->prepare("UPDATE session_incharge SET status='closed', session_closed_time=now() WHERE  username=:id");

    $st->execute(array(
        ':id' => $_SESSION['id']
    
    ));



    $st = $this->db->prepare("SELECT * FROM session_incharge WHERE username= :id ");
    $st->execute(array(
        ':id' => $_SESSION['id']
    
     
    ));
    $user = $st->fetchAll();
    $count = $st->rowCount();


    if($count>0){

      foreach ($user as $usr) :

        if($usr['username']  == $_SESSION['id'] ){
          $id = $usr['incharge_id'];
        }
  
       
      endforeach;

      
    }

    //Fetched the staff id
    echo $id ;


    $st= $this->db->prepare("UPDATE staff SET availability=1 WHERE  staff_id=:id");

    $st->execute(array(
        ':id' => $id
    
    ));

    header('location: ../Staff');

    

  }

  public function index(){
    //session incharge details
  $un = $_SESSION['name'];
    
    $st = $this->db->prepare("SELECT * FROM session_incharge WHERE name = :un");
    $st->execute( array(
       ':un'=> $un,)
    );
    $sinprofile = $st->fetchAll();
   
    $sindata = [
    'sinprofile' => $sinprofile,
     ];
    return ($sindata);
//vol activity details 
    /*$act= $_GET['actid'];
    $st1 = $this->db->prepare("SELECT * FROM session_incharge WHERE vol_activityId = :act");
    $st1 ->execute(array(
      ':act' => $act
    ));
    $data = $st1->fetchAll();
    $count = $st1->rowCount();
    if($count != 1){
      $msg = "error!!!!";
    }
$st2=$this->db->prepare("SELECT * FROM vol_activity 
INNER JOIN session_incharge on vol_activity.activity_id=session_incharge.vol_activtyId WHERE vol_activity.activity_id=:act");
 $st2->execute(array(
  ':act' => $act
));
$actlist = $st2->fetchAll();
  $pageData = [
    'msg' => $msg,
    'data' => $data,
    'actlist' => $actlist
  ];

  return $pageData;
*/

   $act=$_GET['actid'];
   $st1 = $this->db->prepare("SELECT session_incharge.name,session_incharge.username, session_incharge.vol_activityId,session_incharge.vol_activity,session_incharge.session_start_time,
   vol_activity.venue,vol_activity.start_date_time,vol_activity.end_date_time,vol_activity.participant_count FROM vol_activity 
   INNER JOIN session_incharge ON vol_activity.activity_id=session_incharge.vol_activtyId WHERE vol_activity.activity_id=:act");
$st1 ->execute(array(
  ':act' => $act
));
$actprofile = $st1->fetchAll();
   
$actdata = [
'actprofile' => $actprofile
 ];
return ($actdata);






  }
 public function media_upload(){
  $un = $_SESSION['name'];
    
  $st = $this->db->prepare("SELECT * FROM session_incharge WHERE name = :un");
  $st->execute( array(
     ':un'=> $un,)
  );
  $sinprofile = $st->fetchAll();
 
  $sindata = [
  'sinprofile' => $sinprofile,
   ];
  return ($sindata);


  


 }












}