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
        $newReq_Count = $stmt->rowCount();

        //All the data that has to be return from this functon is added to an associative array
        $pageData = [
          'page_no' => $page_no,
          'records_per_page' => $records_per_page,
          'contacts' => $contacts,
          'num_contacts' => $num_contacts,
          'newReq'=> $newReq,
          'newReq_Count' => $newReq_Count
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
                    $vol_id ="VOLHB00".$_GET['id'];
                  }else if(strlen($_GET['id'])==2 && strlen($_GET['id'])>0){
                    $vol_id ="VOLHB0".$_GET['id'];
                  }else if(strlen($_GET['id'])>0){
                    $vol_id ="VOLHB".$_GET['id'];
                  };

                  
                  //Generate a random string for the Password
                  function generateRandomString($length = 10) {
                    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
                  }

                 //Insert Data into User table
                  $pwd  = generateRandomString();
                  $tmp_pw = password_hash($pwd, PASSWORD_DEFAULT);
                  $role = "volunteer";



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
                  header('location: ../Commissioner/volunteer');

                //Sending Email To the Volunteer

                $st = $this->db->prepare("SELECT name,email FROM volunteer WHERE vol_id=:vol_id");
                $st->execute(array(
                  ':vol_id' => $vol_id
                ));
                $vol_details = $st->fetchAll();

                foreach ($vol_details as $usr) :
                  $vol_email = $usr['email'];
                  $vol_name = $usr['name'];

                endforeach;
              
                $url = URL."login";

                  $to = $vol_email;
                  $subject = 'Activate Your User Profile!';
                  $rec_name = $vol_name;
      
                 
      
                  $message = '<h5> Hello '.$rec_name.', </h5>
                  <p> We are delighted to inform you that, you\'ve been accepted as a Volunteer of Tzu Chi Foundation. Join with us on our journey of spreading kindness and compassion all over the world. Happy Volunteering! </p>';
      
                  $message .='<br>Here is your Volunteer Profile Credentials: </br>';
                  $message .='<br>Username : '.$vol_id.' </br>';
                  $message .='<br>Password : '.$pwd.' </br>';
                  $message .= '<br> <a href="'.$url.'">'.$url.'</a></p>';
      
                  $message .= '<h4>***Humanity Web App - Powered by Team MAUV***</h4>';
      
                  $headers ="From: Humanity<tzuchihumanity@gmail.com>\r\n";
                  $headers .="Reply-To: tzuchihumanity@gmail.com\r\n";
                  $headers .= "Content-type: text/html\r\n";
      
                  Email::email_send($to,$rec_name, $subject, $message, $headers);

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


  public function get_beneficiary_case(){


    //Pending cases
    $st = $this->db->prepare('SELECT * FROM beneficiery_case WHERE status="pending" ORDER BY id ');
    $st->execute();
    $upcomings = $st->fetchAll();

//Current cases
$stmt2 = $this->db->prepare('SELECT * FROM beneficiery_case WHERE status="current" ORDER BY id ');        
$stmt2->execute();
$currents = $stmt2->fetchAll();

    //Finished cases
    $stmt = $this->db->prepare('SELECT * FROM beneficiery_case WHERE status="finished" ORDER BY id ');        
    $stmt->execute();
    $finishs = $stmt->fetchAll();

    
//All the data that has to be return from this functon is added to an associative array
$pageData = [
  'currents' => $currents,
  'upcomings' => $upcomings,
  'finishs'=> $finishs
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

  
  


  public function run_add_com()
  {
   // echo "starting";

   if (!empty($_POST)) {
                                                               
      $name = $_POST['name'];
      $nic = $_POST['nic'];
      $email = $_POST['email'];
      $address =$_POST['address'];
      $password = $_POST['password'];
      $contact = $_POST['contact'];
      $role="commissioner";
      $gender =$_POST['gender'];
      $pw = password_hash($password, PASSWORD_DEFAULT);
      
      $stmt = $this->db->prepare('INSERT INTO `commissioner` (`name`,`com_nic`, `email`,`contact`, `address`,`gender`) VALUES ( :name, :nic,:email,:contact, :address, :gender)');
      $stmt->execute(array(
        ':name'=>$name,
        ':nic'=>$nic,
        ':email'=>$email,
        ':contact'=>$contact,
        ':address'=>$address,
        ':gender'=>$gender,
       
      ));
      
      $custom_id=$this->db->prepare("SELECT id FROM commissioner WHERE com_nic=:nic");
      $custom_id->execute(array(
        ':nic' => $_POST['nic'],
      ));
      $cid_result = $custom_id->fetchAll();
      $count = $custom_id->rowCount();
      if ($count > 0) {
        foreach ($cid_result as $cidtmp) :
          if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
            $cid ="COMHB00".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
            $cid ="COMHB0".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])>0){
            $cid ="COMHB".$cidtmp['id'];
          };
          
        endforeach;

        $username=$cid;
        $stmt2=$this->db->prepare('INSERT INTO `user` (`username`,`password`,`role`) VALUES ( ?,?,?)');
      $stmt2->execute([$username, $pw, $role]);

      $get_comid = $this->db->prepare("SELECT id FROM user WHERE username= :uname  ");
      $get_comid->execute(array(
        ':uname' => $username
      ));

      $result = $get_comid->fetchAll();
      $count2 = $get_comid->rowCount();


      if ($count2 > 0) {
        foreach ($result as $tmp) :
          $id = $tmp['id'];
        endforeach;

      $cidstmt = $this->db->prepare('UPDATE `commissioner` SET com_id =:cid, userlogin_id=:id WHERE com_nic=:nic');
      $cidstmt->execute(array(
        ':nic' => $_POST['nic'],
        ':cid'=>$cid,
        ':id'=>$id,
      ));
    }
      
      

     
      $msg = "Form data submitted successfully!";
                   
                }
    
  }
  else{
      $msg = "Data fields are empty";
    }
    $stmtc = $this->db->prepare('SELECT * FROM commissioner  ORDER BY id ');     
    $stmtc->execute();
    $contacts = $stmtc->fetchAll();
    

   //data that has to be return from this functon is added to an associative array
    $pageData = [
      'contacts' => $contacts,
      'msg' => $msg
    ];
    return ($pageData);
    
}



  public function fetch_sessionIncharge_details()
  {

     $getParam = $_GET['gen'];
     $msg="Hello";
     $tempUsername="";
     $stf_id="";
   

          //Fetch staff ids for drop down list
          $query = "SELECT * FROM staff";
          $statement = $this->db->prepare($query);
          $statement->execute();
          $staff_info = $statement->fetchAll();




    if($getParam ==1){
  
      if(isset($_POST['generateName']) && !empty($_POST['staff-id'])){

        $stf_id=strtoupper($_POST['staff-id']);

        foreach ($staff_info as $tmp) :

          if($tmp['staff_id'] == $stf_id ){
            $stf_id = $tmp['staff_id'];
            $id_in_stf_tbl = $tmp['id'];
          }
         
        endforeach;
        
            $str_stf_id= strval($id_in_stf_tbl);
            $tempUsername= 'TMP'.$stf_id;
         
            //Generate a random string for the Password
            function generateRandomString($length = 6) {
              return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
            }

            //Insert Data into User table
            $pwd  = generateRandomString();

          
        
      }else{
          $msg="Please select a Staff ID!";
      }
      
    }

   

    if($getParam ==2){
 
      //Insert temp username & passcode to usertable
      $str_stf_id="Hu";
        //Insert Data into User table
        $tmpUser = $_POST['tmp_username'];
        $pwd  = $_POST['pcode'];
        $staff_id =$_POST['staff_id'];
        $stf_tbl_id =$_POST['id_in_stf_tbl'];
       
        $role = "session_incharge";

        // $msg =$staff_id ;
        $msg =$_POST['id_in_stf_tbl'];

 
        // $stmt = $this->db->prepare("INSERT INTO session_Incharge(incharge_id,id_in_stf_tbl,username, passcode) VALUES(?,?,?,?)");
        // $result1 = $stmt->execute([$tmpUser,$id_in_stf_tbl,$tmpUser, $pwd]);

        
        // $stmt = $this->db->prepare("INSERT INTO `session_incharge`(`incharge_id`, `staff_id`, `username`, `passcode`) VALUES (?,?,?,?)");

        // $result=$stmt->execute([$tmpUser,$staff_id,$tmpUser, $pwd]);

        // $stmt = $this->db->prepare("INSERT INTO user(username,password,role) VALUES(?,?,?)");
        // $result2 = $stmt->execute([$tmpUser, $tmp_pw, $role]);

        // $st = $this->db->prepare('INSERT INTO session_incharge(incharge_id,staff_id,username,passcode) VALUES (:inc_id,:stf_id,:username,:passcode)');
        //  $st->execute(array(
        //   ':inc_id'=>$tmpUser,
        //   ':stf_id'=>$staff_id,
        //   ':username'=>$tmpUser,
        //   ':passcode'=>$pwd
        // ));

        // if($result1){
        
        //   $msg ="Session Incharge appointed Successfully!";
          
          
        // }else{
        //   $msg ="Error in data insertion to User table!";
       
        // }
 
    }

   


      //Fetch Session Incharge details
        $query = "SELECT * FROM session_incharge";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $total_row = $statement->rowCount();


        if($total_row > 0)
        {
            $pageData = [
              'result' => $result,
              'staff_info'=>$staff_info,
              'msg'=>$msg,
              'tempUsername'=>$tempUsername,
              'pwd'=>$pwd,
              'stf_id'=>$stf_id,
              '$str_stf_id'=>$str_stf_id
            ];
            return ($pageData);

        }
  }


 


















public function get_view_com_list() {
          
          $stmt = $this->db->prepare('SELECT * FROM commissioner  ORDER BY id ');     
          $stmt->execute();
          $contacts = $stmt->fetchAll();
          $msg="";
  
         //data that has to be return from this functon is added to an associative array
          $pageData = [
            'contacts' => $contacts,
            'msg' => $msg
          ];
          return ($pageData);
}


}
