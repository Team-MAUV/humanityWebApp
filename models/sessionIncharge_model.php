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
  
        $st= $this->db->prepare("UPDATE staff SET availability=1 WHERE  staff_id=:id");

        $st->execute(array(
            ':id' => $id
        
        ));
      endforeach;

      
    }

    //Fetched the staff id
    echo $id ;


    

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


public function run_media_upload()
{
  $msg = '';
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
$actID=$_POST['actID'];
  
  // Check if user has uploaded new image
  if (isset($_POST['actID'], $_POST['incharge_id'], $_POST['date'],$_FILES['image'])) {
    if($_POST['incharge_id']==$_SESSION['id']){
  
      if($_POST['actID']==$actid)  {

    // The folder where the images will be stored

    if (!file_exists($_SERVER['DOCUMENT_ROOT'] . '/humanity/public/act_img/' .$actID. '/')) 
    { 
      mkdir($_SERVER['DOCUMENT_ROOT'] . '/humanity/public/act_img/' .$actID. '/', 0777, true); 
    }



    $target_dir =  $_SERVER['DOCUMENT_ROOT'] . '/humanity/public/act_img/' .$actID. '/';
  
    $save_path = 'act_img/' .$actID. '/';
    // The path of the new uploaded image
    $dest_path = $target_dir . basename($_FILES['image']['name']);

    $image_path = $save_path . basename($_FILES['image']['name']);
    // Check to make sure the image is valid
    if (!empty($_FILES['image']['tmp_name']) && getimagesize($_FILES['image']['tmp_name'])) {
      if (file_exists($dest_path)) {
        $msg = "Image already exists, please choose another or rename that image.";
      } else if ($_FILES['image']['size'] > 500000) {
        $msg = "Image file size too large, please choose an image less than 500kb.";
      } else {
      
        $get_sessid = $this->db->prepare("SELECT id FROM session_incharge WHERE username= :sessid ");
        $get_sessid->execute(array(
          ':sessid' => $_POST['incharge_id']
        ));
        $result = $get_sessid->fetchAll();
        $count = $get_sessid->rowCount();


        if ($count > 0) {
          foreach ($result as $tmp) :
            $id = $tmp['id'];
          endforeach;

          $get_actid = $this->db->prepare("SELECT id FROM vol_activity WHERE activity_id= :actid ");
          $get_actid->execute(array(
            ':actid' => $_POST['actID']
          ));
          $result = $get_actid->fetchAll();
          $count = $get_actid->rowCount();
  
  
          if ($count > 0) {
            foreach ($result as $tmp) :
              $aid = $tmp['id'];
            endforeach;
  






        // Insert image info into the database (id, image path, and date added)
        $st = $this->db->prepare('INSERT INTO actimage(act_id,incharge_id,date,image_path) VALUES (:actid,:inchargeid,:date,:path)');
        $st->execute(array(
          ':actid' => $aid,
          ':inchargeid'=>$id,
          ':date'=>$_POST['date'],
          ':path' => $image_path
        ));

      


  // Everything checks out now we can move the uploaded image
  move_uploaded_file($_FILES['image']['tmp_name'], $dest_path);

  $custom_id=$this->db->prepare("SELECT id FROM actimage WHERE image_path=:image_path");
  $custom_id->execute(array(
    ':image_path' => $image_path,
  ));
  $cid_result = $custom_id->fetchAll();
  $count2 = $custom_id->rowCount();
  if ($count2 > 0) {
    foreach ($cid_result as $cidtmp) :
      if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
        $customid ="ACTIMGB00".$cidtmp['id'];
      }else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
        $customid ="ACTIMGB0".$cidtmp['id'];
      }else if(strlen($cidtmp['id'])>0){
        $customid ="ACTIMGB".$cidtmp['id'];
      };
    endforeach;

  $cidstmt = $this->db->prepare('UPDATE `actimage` SET image_id=:customid WHERE image_path=:image_path');
  $cidstmt->execute(array(
    ':image_path' => $image_path,
    ':customid'=>$customid,
  ));


  }



        $msg = "Image uploaded successfully!";
      }
    } 
    }
    }
    else{
      $msg = 'Please upload an image!';
    }
  }
  else{
    $msg = " Activity ID does not match!";
  }
  }
    else{
      $msg = " ID does not match!";
    }
      }


    $pageData = [

      'msg' => $msg
    ];
    return $pageData;
  

}

public function media_display()
{
  
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
    $actid = $usr['vol_activityId']; //session in charge //vacthboo2
  }

endforeach;
}



$st2 = $this->db->prepare("SELECT * FROM vol_activity WHERE activity_id =:id ");
  $st2->execute( array(
     ':id'=> $actid)
  );
  $act = $st2->fetchAll();
$count1 = $st2->rowCount();

if($count1>0){

  foreach ($act as $act) :
  
    if($act['activity_id']  == $actid ){
      $act = $act['id']; //session in charge //vacthboo2
    }
  
   
  endforeach;
  }

 $st1 = $this->db->prepare("SELECT * FROM actimage  WHERE act_id=:act");
$st1 ->execute(array(
':act' => $act
));
$images = $st1->fetchAll();


  $pageData = [

    'images' => $images
  ];

  return ($pageData);






}


public function marking_attendance(){
  $un = $_SESSION['id'];
  $stat = 1;
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
  $st2 = $this->db->prepare("SELECT * FROM vol_activity WHERE activity_id =:id ");
  $st2->execute( array(
     ':id'=> $actid)
  );
  $act = $st2->fetchAll();
$count1 = $st2->rowCount();

if($count1>0){

  foreach ($act as $act) :
  
    if($act['activity_id']  == $actid ){
      $act = $act['id']; //session in charge //vacthboo2
    }
  
   
  endforeach;
  }
 
endforeach;
}
  $stmt = $this->db->prepare("SELECT volunteer.vol_id as volun_id FROM volunteer INNER JOIN marking_attendance 
   ON marking_attendance.vol_id=Volunteer.id WHERE marking_attendance.activity_id=:actid AND marking_attendance.confirm= :stat");        
  $stmt->execute(array(
      'stat'=> $stat,
      ':actid'=> $act
      ) );



  $confirm = $stmt->fetchAll();

  
//All the data that has to be return from this functon is added to an associative array
$pageData = [
'confirm' => $confirm

];
return ($pageData);




}

public function add_mark_attendance(){


    if(!empty($_POST['present'])){
      // Loop to store and display values of individual checked checkbox.
      foreach($_POST['present'] as $selected){
      




}}













}














}


































