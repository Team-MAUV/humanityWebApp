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



 public function media_upload()
 {
  $msg = '';
  $actID=$_POST['actID'];

  $un = $_SESSION['id'];
  //fetch sess details
 /* $get_cat = $this->db->prepare("SELECT * From session_incharge Where  username = :un");
  $get_cat->execute(array(
    ':un' => $un
  ));*/

    // Check if user has uploaded new image
    if (isset($_POST['actID'],$_POST['incharge_id'], $_POST['date'],$_FILES['image'])){
    if($_POST['incharge_id']==$_SESSION['id']){
  
      // The folder where the images will be stored
      $target_dir =  $_SERVER['DOCUMENT_ROOT'] . '/humanity/public/act_img/'.$actID;
    /*  if (!file_exists('$target_dir')) {
     mkdir('$target_dir', 0777, true);
    }*/
     
      $save_path = 'act_img/'.$actID;
      // The path of the new uploaded image
      $dest_path = $target_dir . basename($_FILES['image']['name']);

      $image_path = $save_path . basename($_FILES['image']['name']);
      // Check to make sure the image is valid

   
    
      if (!empty($_FILES['image']['tmp_name']) && getimagesize($_FILES['image']['tmp_name']))
       {
        if (file_exists($dest_path)) {
          $msg = "Image already exists, please choose another or rename that image.";
        } else if ($_FILES['image']['size'] > 500000) {
          $msg = "Image file size too large, please choose an image less than 500kb.";
        } 
        else {
          $stmt = $this->db->prepare('INSERT INTO media (incharge_id,date,activity_id,media_path) VALUES ( :incharge_id, :date,:activity_id,:path)');
          $stmt->execute(array(
            ':incharge_id'=>$_POST['incharge_id'],
            ':date'=>$_POST['date'],
            'activity_id'=>$actID,
            ':path'=>$image_path
          ));

          
          // Everything checks out now we can move the uploaded image
          move_uploaded_file($_FILES['image']['tmp_name'], $dest_path);

      
        //id create

          $custom_id=$this->db->prepare("SELECT id FROM media WHERE media_path=:path");
          $custom_id->execute(array(
            ':path' => $image_path,
          ));
          $cid_result = $custom_id->fetchAll();
          $count2 = $custom_id->rowCount();
          if ($count2 > 0) {
            foreach ($cid_result as $cidtmp) :
              if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
                $customid ="AIMG00".$cidtmp['id'];
              }else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
                $customid ="AIMG0".$cidtmp['id'];
              }else if(strlen($cidtmp['id'])>0){
                $customid ="AIMG".$cidtmp['id'];
              };
            endforeach;
      
          $cidstmt = $this->db->prepare('UPDATE media SET media_id=:customid WHERE media_path=:path');
          $cidstmt->execute(array(
            ':path' => $image_path,
            ':customid'=>$customid,
          ));
        }
    // Insert image info into the database 
       


          $msg = "Image uploaded successfully!";
        }
      } 
      else {
        $msg = 'Please upload an image!';
      }
    }
    else{
      $msg = "session ID does not match!";
    }
   

       $pageData = [

        'msg' => $msg
      ];
      return $pageData;


}
 }
}





































