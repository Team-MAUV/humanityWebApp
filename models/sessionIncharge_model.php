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

  public function index()
  {

    $un = $_SESSION['name'];
    echo $un;
    $st = $this->db->prepare("SELECT `name`,`vol_activity`,`session_start_time` FROM `session_incharge` WHERE `username`='$un' ");
    $st->execute();
    $sessprofile = $st->fetchAll();
    print_r($sessprofile);
    $sessdata = [
      'sessprofile' => $sessprofile
    ];
    return ($sessdata);
  }














}