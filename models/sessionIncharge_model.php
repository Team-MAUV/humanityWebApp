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
  $un = $_SESSION['id'];
    
    $st = $this->db->prepare("SELECT * FROM session_incharge WHERE username = :un");
    $st->execute( array(
       ':un'=> $un,)
    );
    
    
$user = $st->fetchAll();
$count = $st->rowCount();


if($count>0){

  foreach ($user as $usr) :

    if($usr['username']  == $_SESSION['id'] ){
      $actid = $usr['vol_activityId']; //session in charge 
    }

   
  endforeach;
}
   $st1 = $this->db->prepare("SELECT * FROM vol_activity  WHERE activity_id=:act");
$st1 ->execute(array(
  ':act' => $actid
));
$actprofile = $st1->fetchAll();
   
$actdata = [
'actprofile' => $actprofile,
'user' => $user
 ];
return ($actdata);



}



 public function media_upload(){
  $un = $_SESSION['id'];
    
  $st = $this->db->prepare("SELECT * FROM session_incharge WHERE username = :un");
  $st->execute( array(
     ':un'=> $un,)
  );
  $sinprofile = $st->fetchAll();
 
  $sindata = [
  'sinprofile' => $sinprofile,
   ];
  return ($sindata);


  
    if (!empty($_POST)) {

      $actID=$_POST['actID'];
    
     

      $get_cat = $this->db->prepare("SELECT * From vol_activity Where activity_id = :id");
      $get_cat->execute(array(
        ':id' => $actID
      ));
      $act_exist = $get_cat->fetchAll();
      $act_count = $get_cat->rowCount();

    
      if($act_count>0)
      {
      
        $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/humanity/public/act_img/'.$actID;
    

        $dest_path = $target_dir . basename($_FILES['myFile']['name']);

        if (!file_exists('$target_dir')) {
          mkdir('$target_dir', 0777, true);
      }

       

      
        if (!empty($_FILES['myFile']['tmp_name']) && getimagesize($_FILES['myFile']['tmp_name']))
         {
          if (file_exists($dest_path)) {
            $msg = "Image already exists, please choose another or rename that image.";
          } else if ($_FILES['myFile']['size'] > 500000) {
            $msg = "Image file size too large, please choose an image less than 500kb.";
          } 
          else
           {
            move_uploaded_file($_FILES['myFile']['tmp_name'], $dest_path);
            $msg="File uploaded.";
          }
             

          }
       }









       $pageData = [

        'msg' => $msg
      ];
      return $pageData;


}
 }

































}

