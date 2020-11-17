<?php

class commissioner_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }



  public function get_reg_vol_profiles() {
        //Volunteer Profiles
        $st = $this->db->prepare('SELECT * FROM volunteer WHERE status=1 ORDER BY id LIMIT :current_page, :record_per_page');
        // Get the page via GET request (URL param: page), if non exists default the page to 1
        $page_no = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

        // Number of records to show on each page
        $records_per_page = 5;

        $st->bindValue(':current_page', ($page_no - 1) * $records_per_page, PDO::PARAM_INT);
        $st->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
        $st->execute();
        $num_contacts = $this->db->query('SELECT COUNT(*) FROM volunteer')->fetchColumn();
        $contacts = $st->fetchAll();

        //Volunteer Requests
        $stmt = $this->db->prepare('SELECT * FROM volunteer WHERE status=0 ORDER BY join_date ');        
        $stmt->execute();
        $newReq = $stmt->fetchAll();

        //All the data that has to be return from this functon is added to an associative array
        $pageData = [
          'page_no' => $page_no,
          'records_per_page' => $records_per_page,
          'contacts' => $contacts,
          'num_contacts' => $num_contacts,
          'newReq'=> $newReq
        ];
        return ($pageData);
  }

  public function run_search_volunteer(){

        $st = $this->db->prepare("SELECT * FROM volunteer WHERE vol_id= :vol_id");

        $st->execute(array(
          ':vol_id' => $_POST['search']
        ));
        $page_no = 1;
        $records_per_page = 1;
        $num_contacts = 1;

        $contacts = $st->fetchAll();
        $pageData = [
          'page_no' => $page_no,
          'records_per_page' => $records_per_page,
          'contacts' => $contacts,
          'num_contacts' => $num_contacts
        ];
        return ($pageData);
  }


  public function run_accept_vol_request(){
          
                  //Generate Vol ID from the parameters passed from URL
                  if(strlen($_GET['id'])==1 && strlen($_GET['id'])>0){
                    $vol_id ="VOL/HB/00".$_GET['id'];
                  }else if(strlen($_GET['id'])==2 && strlen($_GET['id'])>0){
                    $vol_id ="VOL/HB/0".$_GET['id'];
                  }else if(strlen($_GET['id'])>0){
                    $vol_id ="VOL/HB/".$_GET['id'];
                  };

                  echo $vol_id;

         
                  //Generate a random string for the Password
                  function generateRandomString($length = 10) {
                    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
                  }


                 //Insert Data into User table
                  $tmp_pw = password_hash(generateRandomString(), PASSWORD_DEFAULT);
                  $role = "volunteer";

                  echo $tmp_pw;

                  $stmt = $this->db->prepare("INSERT INTO user(username,password,role) VALUES(?,?,?)");

                  $stmt->execute([$vol_id, $tmp_pw, $role]);

                
                  //Get the id corresponding to username from user table
                  $st = $this->db->prepare("SELECT id FROM user WHERE username=:username");
                  $st->execute(array(
                    ':username' => $vol_id
                  ));
                  $user_id = $st->fetchAll();

                          
                  foreach ($user_id as $usr) :
                    $userlogin_id = $usr['id'];
                  endforeach;
                  echo $userlogin_id;

                  $level = "Temporary Volunteer";
                  $vol_points = 0;
                  $status = 1;
                  $id_vol_table = $_GET['id'];

                  $st = $this->db->prepare("UPDATE volunteer SET vol_id=:vol_id, userlogin_id=:userlogin_id, level=:level, vol_points=:vol_points, status=:status WHERE id=:id_vol_table" );
                  $st->execute(array(
                    ':vol_id' => $vol_id,
                     ':userlogin_id' => $userlogin_id,
                     ':level'=> $level,
                     ':vol_points'=>  $vol_points,
                     ':status'=>  $status,
                     ':id_vol_table' => $id_vol_table
                  ));
                 
                  echo "Updated successfully!";
  }





  public function get_images_display()
  {
    $st = $this->db->prepare('SELECT * FROM images ORDER BY uploaded_date DESC');
    $st->execute();
    $images = $st->fetchAll();

    $pageData = [

      'images' => $images
    ];

    return ($pageData);
  }

  public function run_mediaUpload()
  {
    $msg = '';
    // Check if user has uploaded new image
    if (isset($_FILES['image'], $_POST['title'], $_POST['description'])) {
      // The folder where the images will be stored

      $target_dir =  $_SERVER['DOCUMENT_ROOT'] . '/humanity/public/media/images/';
      $save_path = 'images/';
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
          // Everything checks out now we can move the uploaded image
          move_uploaded_file($_FILES['image']['tmp_name'], $dest_path);

          // Insert image info into the database (title, description, image path, and date added)
          $stmt = $this->db->prepare('INSERT INTO images VALUES (NULL, ?, ?, ?, CURRENT_TIMESTAMP)');
          $stmt->execute([$_POST['title'], $_POST['description'], $image_path]);

          $msg = "Image uploaded successfully!";
        }
      } else {
        $msg = 'Please upload an image!';
      }


      $pageData = [

        'msg' => $msg
      ];
      return $pageData;
    }
  }


  public function get_case(){


    $st = $this->db->prepare('SELECT * FROM beneficiery_case ORDER BY id ');
    $st->execute();
    $contacts = $st->fetchAll();
    $pageData = [
      'contacts' => $contacts,
 
    ];
    return ($pageData);

  
  }

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






    }


  }



  }




  public function get_vol_activity_list()
  {

        //Upcoming ACtivities
        $st = $this->db->prepare('SELECT * FROM vol_activity WHERE status="upcoming" ORDER BY id LIMIT :current_page, :record_per_page');
        // Get the page via GET request (URL param: page), if non exists default the page to 1
        $page_no = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

        // Number of records to show on each page
        $records_per_page = 5;

        $st->bindValue(':current_page', ($page_no - 1) * $records_per_page, PDO::PARAM_INT);
        $st->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
        $st->execute();
        $num_contacts = $this->db->query('SELECT COUNT(*) FROM vol_activity')->fetchColumn();
        $contacts = $st->fetchAll();



        //Finished Activities
        $stmt = $this->db->prepare('SELECT * FROM vol_activity WHERE status="finished" ORDER BY id ');        
        $stmt->execute();
        $finished = $stmt->fetchAll();

    //All the data that has to be return from this functon is added to an associative array
    $pageData = [
      'page_no' => $page_no,
      'records_per_page' => $records_per_page,
      'contacts' => $contacts,
      'num_contacts' => $num_contacts,
      'newReq'=> $finished
    ];
    return ($pageData);
  }

  public function run_search_volunteer_activity()
  {

    $st = $this->db->prepare("SELECT * FROM vol_activity WHERE activity_id= :activity_id");

    $st->execute(array(
      ':activity_id' => $_POST['search']
    ));
    $page_no = 1;
    $records_per_page = 1;
    $num_contacts = 1;

    $contacts = $st->fetchAll();
    $pageData = [
      'page_no' => $page_no,
      'records_per_page' => $records_per_page,
      'contacts' => $contacts,
      'num_contacts' => $num_contacts
    ];
    return ($pageData);
  }
}
