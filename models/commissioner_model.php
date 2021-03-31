<?php

class commissioner_Model extends Model
{

      public function __construct()
      {
        parent::__construct();
      }



      public function get_reg_vol_profiles() {
                    //Volunteer Profiles
                    $st = $this->db->prepare('SELECT * FROM volunteer WHERE status=1 AND userlogin_id IS NOT NULL ORDER BY id LIMIT :current_page, :record_per_page');
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
                    $st2 = $this->db->prepare('SELECT * FROM volunteer WHERE status=1 AND userlogin_id IS NULL ORDER BY id');
                    $st2->execute();
                    $exvol = $st2->fetchAll();
                    $exvol_Count = $st2->rowCount();
                    //All the data that has to be return from this functon is added to an associative array
                    $pageData = [
                      'page_no' => $page_no,
                      'records_per_page' => $records_per_page,
                      'contacts' => $contacts,
                      'num_contacts' => $num_contacts,
                      'newReq'=> $newReq,
                      'newReq_Count' => $newReq_Count,
                      'exvol' => $exvol
                    ];
                    return ($pageData);
      }


      public function delete_volunteer(){
        $vol_id =$_POST['id'];
        $remark = $_POST['remark'];
        $com_id=$_SESSION['idp'];
        
          $st = $this->db->prepare("SELECT * FROM volunteer WHERE id= :vol_id");

              $st->execute(array(
                ':vol_id' => $vol_id
              ));
              $contacts = $st->fetchAll();
              $count = $st->rowCount();
              if ($count > 0) {
                  foreach ($contacts as $contact) :
                          $usr=$contact['userlogin_id'];
                  endforeach;
                }
                  $stmt = $this->db->prepare("DELETE FROM user WHERE id= :usr");
                  $stmt->execute(array(
                    ':usr' => $usr
                  ));
                  $st2 = $this->db->prepare("UPDATE volunteer SET remove_reson = :reson WHERE id= :vol_id");
                  $st2->execute(array(
                   ':reson' => $remark,
                   'vol_id' =>$vol_id
                   
                  ));
                  //  echo "Updated successfully!";
                  header('location: ../Commissioner/volunteer');
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



        public function get_reg_staff_profiles() {
          //staff Profiles
          $st = $this->db->prepare('SELECT * FROM staff WHERE status="accepted" ORDER BY id LIMIT :current_page, :record_per_page');
          // Get the page via GET request (URL param: page), if non exists default the page to 1
          $spage_no = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

          // Number of records to show on each page
          $records_per_page = 5;

          $st->bindValue(':current_page', ($spage_no - 1) * $records_per_page, PDO::PARAM_INT);
          $st->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
          $st->execute();
          $snum_contacts = $this->db->query('SELECT COUNT(*) FROM staff')->fetchColumn();
          $scontacts = $st->fetchAll();

          //staff Requests
          $stmt = $this->db->prepare('SELECT * FROM staff WHERE status="pending" ORDER BY joined_year ');        
          $stmt->execute();
          $snewReq = $stmt->fetchAll();
          $snewReq_Count = $stmt->rowCount();
             //removed staff
          $stmt2 = $this->db->prepare('SELECT * FROM staff WHERE status="deleted" ORDER BY joined_year ');
          $stmt2->execute();
          $rstff = $stmt2->fetchAll();        
      
          $rstff_count = $stmt2->rowCount();

          //All the data that has to be return from this functon is added to an associative array
          $pageData = [
            'spage_no' => $spage_no,
            'records_per_page' => $records_per_page,
            'scontacts' => $scontacts,
            'snum_contacts' => $snum_contacts,
            'snewReq'=> $snewReq,
            'snewReq_Count' => $snewReq_Count,
            'rstff' => $rstff
          ];
          return ($pageData);
      }


      public function get_reg_buyer_profiles() {
        //buyer Profiles
        $st = $this->db->prepare('SELECT * FROM buyer WHERE userlogin_id IS NOT NULL ORDER BY id LIMIT :current_page, :record_per_page');
        // Get the page via GET request (URL param: page), if non exists default the page to 1
        $bpage_no = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

        // Number of records to show on each page
        $records_per_page = 5;

        $st->bindValue(':current_page', ($bpage_no - 1) * $records_per_page, PDO::PARAM_INT);
        $st->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
        $st->execute();
        $bnum_contacts = $this->db->query('SELECT COUNT(*) FROM buyer')->fetchColumn();
        $bcontacts = $st->fetchAll();

        $st2 = $this->db->prepare('SELECT * FROM buyer WHERE userlogin_id IS NULL');
        $st2->execute();
        $rbuy = $st2->fetchAll();


        //All the data that has to be return from this functon is added to an associative array
        $pageData = [
          'bpage_no' => $bpage_no,
          'records_per_page' => $records_per_page,
          'bcontacts' => $bcontacts,
          'bnum_contacts' => $bnum_contacts,
          'rbuy' => $rbuy
        ];
        return ($pageData);
      }



      public function get_reg_donor_profiles() 
      {
        //donor Profiles
        $st = $this->db->prepare('SELECT * FROM donor WHERE userlogin_id IS NOT NULL ORDER BY id LIMIT :current_page, :record_per_page');
        // Get the page via GET request (URL param: page), if non exists default the page to 1
        $dpage_no = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

        // Number of records to show on each page
        $records_per_page = 5;

        $st->bindValue(':current_page', ($dpage_no - 1) * $records_per_page, PDO::PARAM_INT);
        $st->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
        $st->execute();
        $dnum_contacts = $this->db->query('SELECT COUNT(*) FROM donor')->fetchColumn();
        $dcontacts = $st->fetchAll();
        $st2 = $this->db->prepare('SELECT * FROM donor WHERE userlogin_id IS NULL');
        $st2->execute();
        $rdon = $st2->fetchAll();
        
        

        //All the data that has to be return from this functon is added to an associative array
        $pageData = [
          'dpage_no' => $dpage_no,
          'records_per_page' => $records_per_page,
          'dcontacts' => $dcontacts,
          'dnum_contacts' => $dnum_contacts,
          'rdon' => $rdon
        ];
        return ($pageData);
      }

      public function run_accept_vol_request()
      {
                
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

      public function run_reject_vol_request()
      {
          
        
          $status=2;
          $id=$_POST['vol_id'];
          $reason=$_POST['reason'];
          
          $st = $this->db->prepare("UPDATE volunteer SET status=:status, reject_reason=:reason WHERE id=:vol_id " );
          $st->execute(array(
            ':status'=>  $status,
            ':vol_id'=>$id,
            ':reason'=>$reason,
          ));
          echo "Updated successfully!";
          header('location: ../Commissioner/volunteer');


         

         
      
        

        //Sending Email To the Volunteer

         

          $st3 = $this->db->prepare("SELECT * FROM volunteer WHERE id=:vol_id");
          $st3->execute(array(
            ':vol_id'=>$id,
          ));
          $vol_details = $st3->fetchAll();

          foreach ($vol_details as $susr) :
            $vol_email = $susr['email'];
            $vol_name = $susr['name'];
          endforeach;

          


          $to = $vol_email;
            $subject = 'Your request to become a volunteer was rejected!';
            $rec_name = $vol_name;

          

            $message = '<h5> Hello '.$rec_name.', </h5>
            <p> We are sorry to inform you that, your request to become a volunteer has been rejected by Tzu Chi Foundation due to '.$reason.' Thank you for your effort and we are looking forward to help! </p>';


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


        public function get_beneficiary_case()
        {
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


        public function run_accept_beneficiaryCases()
        {
          
          
                $stat = "current";
                $approve="approve";
                $id=$_GET['id'];
                $cid=Session::get('id');
                // echo $id;

                $st1 = $this->db->prepare("SELECT id FROM commissioner WHERE com_id=:cid");
                $st1->execute(array(
                  ':cid'=>$cid,
                ));
                $com_details = $st1->fetchAll();

                foreach ($com_details as $usr) :
                $c_id = $usr['id'];
                endforeach;

                $st = $this->db->prepare("UPDATE beneficiery_case SET com_id=:cid, status=:stat, approval=:approve,start_date=CURRENT_TIMESTAMP WHERE beneficiery_id=:bene_id " );
                $st->execute(array(
                  ':cid'=>$c_id,
                  ':stat'=>  $stat,
                  ':approve' => $approve,
                  ':bene_id'=>$id,
                ));
            
                echo "Updated successfully!";
                header('location: ../Commissioner/beneficiaryCases');


               

               
            
              

              //Sending Email To the Volunteer

              $st2 = $this->db->prepare("SELECT vol_id FROM beneficiery_case WHERE beneficiery_id=:bene_id");
                $st2->execute(array(
                  ':bene_id'=>$id
                ));
                $vol_ids = $st2->fetchAll();

                foreach ($vol_ids as $vol) :
                  $v_id = $vol['vol_id'];
                endforeach;

               

                $st3 = $this->db->prepare("SELECT * FROM volunteer WHERE id=:v_id");
                $st3->execute(array(
                  ':v_id' => $v_id
                ));
                $vol_details = $st3->fetchAll();

                foreach ($vol_details as $vusr) :
                  $vol_email = $vusr['email'];
                  $vol_name = $vusr['name'];
                endforeach;

                
     

                $to = $vol_email;
                  $subject = 'Your Beneficiary Case approved!';
                  $rec_name = $vol_name;

                

                  $message = '<h5> Hello '.$rec_name.', </h5>
                  <p> We are delighted to inform you that, your benificiary case '.$id.' has been aprroved by Tzu Chi Foundation. Thank you for giving us the chance to help many! </p>';


                  $headers ="From: Humanity<tzuchihumanity@gmail.com>\r\n";
                  $headers .="Reply-To: tzuchihumanity@gmail.com\r\n";
                  $headers .= "Content-type: text/html\r\n";

                  Email::email_send($to,$rec_name, $subject, $message, $headers);

                 
        }


        public function run_reject_beneficiaryCases()
        {
            
          $stat = "reject";
          $approve="rejected";
          $id=$_POST['bene_id'];
          $reason=$_POST['reason'];
          // $reason=$_GET['reason'];
          $cid=Session::get('id');
          // echo $id;

          $st1 = $this->db->prepare("SELECT id FROM commissioner WHERE com_id=:cid");
          $st1->execute(array(
            ':cid'=>$cid,
          ));
          $com_details = $st1->fetchAll();

          foreach ($com_details as $usr) :
          $c_id = $usr['id'];
          
          $st = $this->db->prepare("UPDATE beneficiery_case SET com_id=:cid, status=:stat, approval=:approve,reject_reason=:reason WHERE beneficiery_id=:bene_id " );
          $st->execute(array(
            ':cid'=>$c_id,
            ':stat'=>  $stat,
            ':approve' => $approve,
            ':bene_id'=>$id,
            ':reason'=>$reason,
          ));
        endforeach;
          echo "Updated successfully!";
          header('location: ../Commissioner/beneficiaryCases');


         

         
      
        

        //Sending Email To the Volunteer

        $st2 = $this->db->prepare("SELECT vol_id FROM beneficiery_case WHERE beneficiery_id=:bene_id");
          $st2->execute(array(
            ':bene_id'=>$id
          ));
          $vol_ids = $st2->fetchAll();

          foreach ($vol_ids as $vol) :
            $v_id = $vol['vol_id'];
          endforeach;

         

          $st3 = $this->db->prepare("SELECT * FROM volunteer WHERE id=:v_id");
          $st3->execute(array(
            ':v_id' => $v_id
          ));
          $vol_details = $st3->fetchAll();

          foreach ($vol_details as $vusr) :
            $vol_email = $vusr['email'];
            $vol_name = $vusr['name'];
          endforeach;

          


          $to = $vol_email;
            $subject = 'Your Beneficiary Case rejected!';
            $rec_name = $vol_name;

          

            $message = '<h5> Hello '.$rec_name.', </h5>
            <p> We are sorry to inform you that, your benificiary case '.$id.' has been rejected by Tzu Chi Foundation due to '.$reason.' Thank you for your effort and we are looking forward to help! </p>';


            $headers ="From: Humanity<tzuchihumanity@gmail.com>\r\n";
            $headers .="Reply-To: tzuchihumanity@gmail.com\r\n";
            $headers .= "Content-type: text/html\r\n";

            Email::email_send($to,$rec_name, $subject, $message, $headers);

        }


        public function newVolActivity()
        {
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
              $st = $this->db->prepare('SELECT * FROM vol_activity WHERE status=1 ORDER BY id LIMIT :current_page, :record_per_page');
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
              $stmt = $this->db->prepare('SELECT * FROM vol_activity WHERE status=0 ORDER BY id ');        
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
        public function viewmedia(){
          $id=$_GET['id'];
          $st1 = $this->db->prepare("SELECT * FROM actimage  WHERE act_id=:act");
          $st1 ->execute(array(
          ':act' => $id
          ));
          $images = $st1->fetchAll();
          
          
            $pageData = [
          
              'images' => $images
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
              Session::init();
            
              $getParam = $_GET['gen'];
              $msg="";
              $tempUsername="";
              $pwd="";
            

                    //Fetch staff ids for drop down list
                    $query = "SELECT * FROM staff WHERE availability=1";
                    $statement = $this->db->prepare($query);
                    $statement->execute();
                    $staff_info = $statement->fetchAll();

                    //Fetch Volunteer Activity IDs for drop down list
                      $query = "SELECT * FROM vol_activity WHERE status=1";
                      $st = $this->db->prepare($query);
                      $st->execute();
                      $volactivity_info = $st->fetchAll();




              if($getParam ==1){
            
                if(isset($_POST['generateName']) && !empty($_POST['staff-id'])){

                  $stf_id=strtoupper($_POST['staff-id']);

                  $volactivity_id=strtoupper($_POST['vol-id']);
                  

                  foreach ($staff_info as $tmp) :

                    if($tmp['staff_id']  == $stf_id ){
                      $stf_id = $tmp['staff_id'];
                      $id_in_stf_tbl = $tmp['id'];
                      $name = $tmp['name'];
                      $email = $tmp['email'];
                    }
                  
                  endforeach;


                  foreach ($volactivity_info as $tmp) :

                    if($tmp['activity_id'] == $volactivity_id ){
                      $volact_id = $tmp['activity_id'];
                      $volact_name = $tmp['name'];
                    
                    }
                  
                  endforeach;




                  
                  Session::set('stf_tbl_id', $id_in_stf_tbl);
                  Session::set('staff_id', $stf_id);
                  Session::set('stf_name', $name);
                  Session::set('email', $email);
                  Session::set('volactivity',  $volact_id);
                  Session::set('volactname',  $volact_name);
                  

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
              
                  
                  $tmpUser = $_POST['tmp_username'];
                  $pwd  = $_POST['pcode'];
                  $staff_id =Session::get('staff_id');
                  $stf_tbl_id = intval(Session::get('stf_tbl_id'));
                  $stf_name = Session::get('stf_name');
                  $email = Session::get('email');
                  $vol_activity = Session::get('volactivity');
                  $vol_act_name = Session::get('volactname');
                
                  // $role = "session_incharge";
              
                  

          
                  $stmt = $this->db->prepare("INSERT INTO session_Incharge(incharge_id,name,id_in_stf_tbl,username, passcode, vol_activityId, vol_activity) VALUES(?,?,?,?,?,?,?)");
                  $result1 = $stmt->execute([$staff_id,$stf_name,$stf_tbl_id,$tmpUser, $pwd, $vol_activity, $vol_act_name]);


                  $st= $this->db->prepare("UPDATE staff SET availability=0  WHERE  staff_id=:id" );


                  $st->execute(array(
                      ':id' => $staff_id
                    
                  ));

                  $st= $this->db->prepare("UPDATE vol_activity SET status=0  WHERE  activity_id=:id" );


                  $st->execute(array(
                      ':id' => $vol_activity
                    
                  ));

                  
                  if($result1){


                  
                    $msg ="Session Incharge appointed Successfully!";

                    $to = $email;
                    $subject = 'Session Incharge Credentials!';
                    $rec_name =  $stf_name;

                  

                    $message = '<h5> Hello '.$rec_name.', </h5>
                    <p> You have been appointed as a Session Incharge! </p>';

                    $message .='<br>Here is your Credentials for the Session Incharge Login: </br>';
                    $message .='<br>Username : '.$tmpUser.' </br>';
                    $message .='<br>Password : '.$pwd.' </br>';
              

                    $message .= '<h4>***Humanity Web App - Powered by Team MAUV***</h4>';

                    $headers ="From: Humanity<tzuchihumanity@gmail.com>\r\n";
                    $headers .="Reply-To: tzuchihumanity@gmail.com\r\n";
                    $headers .= "Content-type: text/html\r\n";

                    Email::email_send($to,$rec_name, $subject, $message, $headers);
              
                    
                  }else{
                  
                    $msg ="Error in data insertion to User table!";
                
                  }
          
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
                        'volactivity_info'=>$volactivity_info,
                        'msg'=>$msg,
                        'tempUsername'=>$tempUsername,
                        'pwd'=>$pwd
                        
                      ];
                      return ($pageData);

                  }
        }


 

      public function get_view_com_list() {
            $vol = $this->db->query('SELECT COUNT(*) FROM volunteer')->fetchColumn();
            $stf = $this->db->query('SELECT COUNT(*) FROM staff')->fetchColumn();
            $don = $this->db->query('SELECT COUNT(*) FROM donor')->fetchColumn();
            $buy = $this->db->query('SELECT COUNT(*) FROM buyer')->fetchColumn();
            $bene = $this->db->query('SELECT COUNT(*) FROM beneficiery_case WHERE (status!="pending") ')->fetchColumn();
            $vact = $this->db->query('SELECT COUNT(*) FROM vol_activity')->fetchColumn();
            $damt = $this->db->query('SELECT SUM(contribution) FROM donor')->fetchColumn();
            $bid = $this->db->query('SELECT SUM(highest_bid_amount) FROM product')->fetchColumn();
            
                    
                    $stmt = $this->db->prepare('SELECT * FROM commissioner  ORDER BY id ');     
                    $stmt->execute();
                    $contacts = $stmt->fetchAll();
                    $msg="";
            
                  //data that has to be return from this functon is added to an associative array
                    $pageData = [
                      'contacts' => $contacts,
                      'msg' => $msg,
                      'vol'=>$vol,
                      'stf'=>$stf,
                      'don'=>$don,
                      'buy'=>$buy,
                      'bene'=>$bene,
                      'vact'=>$vact,
                      'damt'=>$damt,
                      'bid'=>$bid,
                    ];
                    return ($pageData);
      }



      public function get_leaveRequests(){

            $st = $this->db->prepare('SELECT * FROM leave_request WHERE status="pending" ORDER BY from_date');
            $st->execute();
            $contacts = $st->fetchAll();

            $st2=$this->db->prepare("SELECT * FROM staff");
            $st2->execute();
            $leaves= $st2->fetchAll();

            $st3 = $this->db->prepare('SELECT DISTINCT from_date,count(*) AS fromd FROM leave_request WHERE status="approved" GROUP BY from_date ORDER BY from_date' );
            $st3->execute();
            $approved = $st3->fetchAll();
            
            $st4 = $this->db->prepare('SELECT DISTINCT to_date,count(*) AS tod FROM leave_request WHERE status="approved" GROUP BY to_date ORDER BY to_date' );
            $st4->execute();
            $approved2 = $st4->fetchAll();
            
          $pageData = [
          'contacts' => $contacts,
          'leaves' =>$leaves,
          'approved'=>$approved,
          'approved2'=>$approved2,
          ];
          return ($pageData);

      }


      public function run_search_leaverequest()
      {

              $st = $this->db->prepare("SELECT * FROM leave_request WHERE staff_id= :staff_id");

              $st->execute(array(
                ':staff_id' => $_POST['search']
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

  
      public function run_accept_leaverequest()
      {
        
        
              $approve="approved";
              $id=$_GET['id'];
              $cid=Session::get('id');
              // echo $id;

              $st1 = $this->db->prepare("SELECT id FROM commissioner WHERE com_id=:cid");
              $st1->execute(array(
                ':cid'=>$cid,
              ));
              $com_details = $st1->fetchAll();

              foreach ($com_details as $usr) :
              $c_id = $usr['id'];
              endforeach;
              $st = $this->db->prepare("UPDATE leave_request SET com_id=:cid, status=:stat WHERE leave_id=:leav_id " );
              $st->execute(array(
                ':cid'=>$c_id,
                ':stat'=>  $approve,
                ':leav_id'=>$id
              ));
            
              echo "Updated successfully!";
              header('location: ../Commissioner/leaveRequests');


             

             
          
            

            //Sending Email To the staff

            $st2 = $this->db->prepare("SELECT staff_id FROM leave_request WHERE leave_id=:leav_id");
              $st2->execute(array(
                ':leav_id'=>$id,
              ));
              $stf_ids = $st2->fetchAll();

              foreach ($stf_ids as $stf) :
                $s_id = $stf['staff_id'];
              endforeach;

             

              $st3 = $this->db->prepare("SELECT * FROM staff WHERE id=:s_id");
              $st3->execute(array(
                ':s_id' => $s_id
              ));
              $stf_details = $st3->fetchAll();

              foreach ($stf_details as $susr) :
                $stf_email = $susr['email'];
                $stf_name = $susr['name'];
              endforeach;

              
   

              $to = $stf_email;
                $subject = 'Your Leave approved!';
                $rec_name = $stf_name;

              

                $message = '<h5> Hello '.$rec_name.', </h5>
                <p> We are delighted to inform you that, your Leave Request has been approved by Tzu Chi Foundation. Thank you! </p>';


                $headers ="From: Humanity<tzuchihumanity@gmail.com>\r\n";
                $headers .="Reply-To: tzuchihumanity@gmail.com\r\n";
                $headers .= "Content-type: text/html\r\n";

                Email::email_send($to,$rec_name, $subject, $message, $headers);

               
      }


      public function run_reject_leaverequest()
      {
          
        
          $status="rejected";
          $id=$_POST['lea_id'];
          $reason=$_POST['reason'];
          // $reason=$_GET['reason'];
          $cid=Session::get('id');
          // echo $id;

          $st1 = $this->db->prepare("SELECT id FROM commissioner WHERE com_id=:cid");
          $st1->execute(array(
            ':cid'=>$cid,
          ));
          $com_details = $st1->fetchAll();

          foreach ($com_details as $usr) :
          $c_id = $usr['id'];
          endforeach;

          $st = $this->db->prepare("UPDATE leave_request SET com_id=:cid, status=:status, reject_reason=:reason WHERE leave_id=:leav_id " );
          $st->execute(array(
            ':cid'=>$c_id,
            ':status'=>  $status,
            ':leav_id'=>$id,
            ':reason'=>$reason,
          ));
       
          echo "Updated successfully!";
          header('location: ../Commissioner/leaveRequests');


         

         
      
        

        //Sending Email To the staff

        $st2 = $this->db->prepare("SELECT staff_id FROM leave_request WHERE leave_id=:leav_id");
          $st2->execute(array(
            ':leav_id'=>$id
          ));
          $stf_ids = $st2->fetchAll();

          foreach ($stf_ids as $stf) :
            $s_id = $stf['staff_id'];
          endforeach;

         

          $st3 = $this->db->prepare("SELECT * FROM staff WHERE id=:s_id");
          $st3->execute(array(
            ':s_id' => $s_id
          ));
          $stf_details = $st3->fetchAll();

          foreach ($stf_details as $susr) :
            $stf_email = $susr['email'];
            $stf_name = $susr['name'];
          endforeach;

          


          $to = $stf_email;
            $subject = 'Your leave request was rejected!';
            $rec_name = $stf_name;

          

            $message = '<h5> Hello '.$rec_name.', </h5>
            <p> We are sorry to inform you that, your leave request '.$id.' has been rejected by Tzu Chi Foundation due to '.$reason.' Thank you and we are looking forward to help! </p>';


            $headers ="From: Humanity<tzuchihumanity@gmail.com>\r\n";
            $headers .="Reply-To: tzuchihumanity@gmail.com\r\n";
            $headers .= "Content-type: text/html\r\n";

            Email::email_send($to,$rec_name, $subject, $message, $headers);


      }























      public function projectReports(){

              //Pending reports
              $st = $this->db->prepare('SELECT * FROM project_report WHERE status="pending" ORDER BY id ');
              $st->execute();
              $pendings = $st->fetchAll();

              //Approved reports
              $stmt2 = $this->db->prepare('SELECT * FROM project_report WHERE status="approved" ORDER BY id ');        
              $stmt2->execute();
              $approved = $stmt2->fetchAll();


              //rejected reports
              $stmt3 = $this->db->prepare('SELECT * FROM project_report WHERE status="rejected" ORDER BY id ');
              $stmt3->execute();
              $rejects = $stmt3->fetchAll();

                
              //All the data that has to be return from this functon is added to an associative array
              $pageData = [
              'approved' => $approved,
              'pendings' => $pendings,
              'rejects'=>$rejects,

              ];
              return ($pageData);


      }

      public function view_reports(){
             // The location of the PDF file
             // on the server
            $file = $_GET["file"];

              
            // Header content type
            header("Content-type: application/pdf");
              
            header("Content-Length: " . filesize($file));
              
            // Send the file to the browser.
            readfile($file);
      }
      public function run_accept_projectreport()
      {
        
        
              $approve="approved";
              $id=$_GET['id'];
              $cid=Session::get('id');
              // echo $id;

              $st1 = $this->db->prepare("SELECT id FROM commissioner WHERE com_id=:cid");
              $st1->execute(array(
                ':cid'=>$cid,
              ));
              $com_details = $st1->fetchAll();

              foreach ($com_details as $usr) :
              $c_id = $usr['id'];
              
              $st = $this->db->prepare("UPDATE project_report SET com_id=:cid, status=:stat,approved_date=CURRENT_TIMESTAMP WHERE id=:proj_id " );
              $st->execute(array(
                ':cid'=>$c_id,
                ':stat'=>  $approve,
                ':proj_id'=>$id,
              ));
            endforeach;
              echo "Updated successfully!";
              // header('location: ../Commissioner/beneficiaryCases');


             

             
          
            

            //Sending Email To the Volunteer

            $st2 = $this->db->prepare("SELECT staff_id FROM project_report WHERE id=:proj_id");
              $st2->execute(array(
                ':proj_id'=>$id,
              ));
              $stf_ids = $st2->fetchAll();

              foreach ($stf_ids as $stf) :
                $s_id = $stf['staff_id'];
              endforeach;

             

              $st3 = $this->db->prepare("SELECT * FROM staff WHERE id=:s_id");
              $st3->execute(array(
                ':s_id' => $s_id
              ));
              $stf_details = $st3->fetchAll();

              foreach ($stf_details as $susr) :
                $stf_email = $susr['email'];
                $stf_name = $susr['name'];
              endforeach;

              
   

              $to = $stf_email;
                $subject = 'Your Project Report approved!';
                $rec_name = $stf_name;

              

                $message = '<h5> Hello '.$rec_name.', </h5>
                <p> We are delighted to inform you that, your Project Report '.$id.' has been aprroved by Tzu Chi Foundation. Thank you for your kind contribution! </p>';


                $headers ="From: Humanity<tzuchihumanity@gmail.com>\r\n";
                $headers .="Reply-To: tzuchihumanity@gmail.com\r\n";
                $headers .= "Content-type: text/html\r\n";

                Email::email_send($to,$rec_name, $subject, $message, $headers);

               
      }


      public function run_reject_projectreport()
      {
          
        
          $status="rejected";
          $id=$_POST['proj_id'];
          $reason=$_POST['reason'];
          // $reason=$_GET['reason'];
          $cid=Session::get('id');
          // echo $id;

          $st1 = $this->db->prepare("SELECT id FROM commissioner WHERE com_id=:cid");
          $st1->execute(array(
            ':cid'=>$cid,
          ));
          $com_details = $st1->fetchAll();

          foreach ($com_details as $usr) :
          $c_id = $usr['id'];
          
          $st = $this->db->prepare("UPDATE project_report SET com_id=:cid, status=:status, remark=:reason WHERE id=:proj_id " );
          $st->execute(array(
            ':cid'=>$c_id,
            ':status'=>  $status,
            ':proj_id'=>$id,
            ':reason'=>$reason,
          ));
        endforeach;
          echo "Updated successfully!";
          // header('location: ../Commissioner/beneficiaryCases');


         

         
      
        

        //Sending Email To the Volunteer

        $st2 = $this->db->prepare("SELECT staff_id FROM project_report WHERE id=:proj_id");
          $st2->execute(array(
            ':proj_id'=>$id
          ));
          $stf_ids = $st2->fetchAll();

          foreach ($stf_ids as $stf) :
            $s_id = $stf['staff_id'];
          endforeach;

         

          $st3 = $this->db->prepare("SELECT * FROM staff WHERE id=:s_id");
          $st3->execute(array(
            ':s_id' => $s_id
          ));
          $stf_details = $st3->fetchAll();

          foreach ($stf_details as $susr) :
            $stf_email = $susr['email'];
            $stf_name = $susr['name'];
          endforeach;

          


          $to = $stf_email;
            $subject = 'Your Project Report was rejected!';
            $rec_name = $stf_name;

          

            $message = '<h5> Hello '.$rec_name.', </h5>
            <p> We are sorry to inform you that, your project report '.$id.' has been rejected by Tzu Chi Foundation due to '.$reason.' Thank you for your effort and we are looking forward to help! </p>';


            $headers ="From: Humanity<tzuchihumanity@gmail.com>\r\n";
            $headers .="Reply-To: tzuchihumanity@gmail.com\r\n";
            $headers .= "Content-type: text/html\r\n";

            Email::email_send($to,$rec_name, $subject, $message, $headers);


      }

      public function run_viewtoedit_profile(){
        $com_id=$_SESSION['idp'];
        $st1 = $this->db->prepare("SELECT address, contact FROM commissioner WHERE id = :id");
        $st1->execute(array(
          ':id'=>$com_id
        ));
        $data = $st1->fetchAll();
        $count = $st1->rowCount();
        if($count == 1){
          $msg = "";
        }else{
          $msg = "TRY AGAIN LATER!!!";
          $data = [];
        }
        
        $pagedata = [
          'data' => $data,
          'msg' => $msg
        ];
        
        return ($pagedata);

      }


      public function run_edit_profile(){

                      
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $password=$_POST['pwd'];
        $id=$_SESSION['idp'];
        $getdata = $this->db->prepare("SELECT userlogin_id FROM commissioner WHERE id = :id");
        $getdata->execute(array(
          ':id'=>$id
        ));
        $login_data = $getdata->fetchAll();
        foreach($login_data as $logdt) :
          $userlogin_id = $logdt['userlogin_id'];
        endforeach;

        $get_userdata = $this->db->prepare("SELECT password FROM user WHERE id = :id");
        $get_userdata->execute(array(
          ':id'=>$userlogin_id
        ));
        $userdata = $get_userdata->fetchAll();
        foreach($userdata as $udt) :
          $cr_pwd = $udt['password'];
        endforeach;
        
        if (password_verify($_POST['pwd'],  $password)){
          $updatebuyer = $this->db->prepare("UPDATE commissioner SET address = :address, contact = :contact WHERE id = :id");
          $updatebuyer->execute(array(
            ':address'=>$address,
            ':contact'=>$contact,
            ':id'=>$id
          ));
          header('location: ../commissioner/index');
        }
        header('location: ../commissioner/edit_profile');
      }

      
      public function change_password(){
              if (!empty($_POST)){

                          $oldpwd=$_POST['oldpwd'];
                          $newpwd=$_POST['newpwd'];
                          $rnewpwd=$_POST['rnewpwd'];
                          $id=$_SESSION['idp'];

                          $hasholdpw =  password_hash($oldpwd, PASSWORD_DEFAULT);

                          $getdata = $this->db->prepare("SELECT userlogin_id FROM commissioner WHERE id = :id");
                          $getdata->execute(array(
                            ':id'=>$id
                          ));

                          $login_data = $getdata->fetchAll();

                          foreach($login_data as $logdt) :
                            $userlogin_id = $logdt['userlogin_id'];
                          endforeach;

                          $get_userdata = $this->db->prepare("SELECT password FROM user WHERE id = :id");

                          $get_userdata->execute(array(
                            ':id'=>$userlogin_id
                          ));

                          $userdata = $get_userdata->fetchAll();

                          foreach($userdata as $udt) :
                            $cr_pwd = $udt['password'];
                          endforeach;

                          if (password_verify($_POST['oldpwd'],  $cr_pwd)){
                                  if($newpwd == $rnewpwd){
                                    $hashnewpw =  password_hash($newpwd, PASSWORD_DEFAULT);
                                    $updatepwd = $this->db->prepare("UPDATE user SET password = :password WHERE id = :id");
                                    $updatepwd->execute(array(
                                      ':password' => $hashnewpw,
                                      ':id' => $userlogin_id
                                    ));
                                    header('location: ../commissioner/Index');
                          }
              }
        
        header('location: ../commissioner/edit_profile');

      }

    }

    public function delete_donor(){

      $don_id =$_POST['id'];
      $remark = $_POST['remark'];
      $com_id=$_SESSION['idp'];
      $st = $this->db->prepare("SELECT * FROM donor WHERE id= :don_id");

          $st->execute(array(
            ':don_id' => $don_id
          ));
          $contacts = $st->fetchAll();
          $count = $st->rowCount();
          if ($count > 0) {
              foreach ($contacts as $contact) :
                      $usr=$contact['userlogin_id'];
              endforeach;
            }
              $stmt = $this->db->prepare("DELETE FROM user WHERE id= :usr");
              $stmt->execute(array(
                ':usr' => $usr
               ));
               $st2 = $this->db->prepare("UPDATE donor SET remove_reson = :reson, del_com = :comid WHERE id= :don_id");
               $st2->execute(array(
                ':reson' => $remark,
                'don_id' =>$don_id,
                'comid' => $com_id
               ));
              //  echo "Updated successfully!";
               header('location: ../Commissioner/donor');

    }
    public function delete_staff(){
      $stf_id =$_POST['id'];
      $remark = $_POST['remark'];
      $com_id=$_SESSION['idp'];

      $st = $this->db->prepare("SELECT * FROM staff WHERE id= :stf_id");

          $st->execute(array(
            ':stf_id' => $stf_id
          ));
          $contacts = $st->fetchAll();
          $count = $st->rowCount();
          if ($count > 0) {
              foreach ($contacts as $contact) :
                      $usr=$contact['userlogin_id'];
              endforeach;
            }
              $stmt = $this->db->prepare("DELETE FROM user WHERE id= :usr");
              $stmt->execute(array(
                ':usr' => $usr
               ));
               $st2 = $this->db->prepare("UPDATE staff SET remove_reson = :reson, com_id = :comid, status = 'deleted' WHERE id= :stf_id");
               $st2->execute(array(
                ':reson' => $remark,
                'stf_id' =>$stf_id,
                'comid' => $com_id
               ));
              //  echo "Updated successfully!";
               header('location: ../Commissioner/staff');
    }

    public function delete_buyer(){

      $buy_id =$_POST['id'];
      $remark = $_POST['remark'];
      $com_id=$_SESSION['idp'];
      $st = $this->db->prepare("SELECT * FROM buyer WHERE id= :buy_id");

          $st->execute(array(
            ':buy_id' => $buy_id
          ));
          $contacts = $st->fetchAll();
          $count = $st->rowCount();
          if ($count > 0) {
              foreach ($contacts as $contact) :
                      $usr=$contact['userlogin_id'];
              endforeach;
            }
              $stmt = $this->db->prepare("DELETE FROM user WHERE id= :usr");
              $stmt->execute(array(
                ':usr' => $usr
               ));
               $st2 = $this->db->prepare("UPDATE buyer SET remove_reson = :reson, del_com = :comid WHERE id= :buy_id");
               $st2->execute(array(
                ':reson' => $remark,
                'buy_id' =>$buy_id,
                'comid' => $com_id
               ));
              //  echo "Updated successfully!";
               header('location: ../Commissioner/buyer');

    }


  }