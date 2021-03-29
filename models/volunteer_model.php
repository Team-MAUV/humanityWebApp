<?php

class volunteer_Model extends Model
{

      public function __construct()
      {
        parent::__construct();
      }


      public function vol_profile()
      {
                $un = $_SESSION['name'];
                // echo $un;
                $st = $this->db->prepare("SELECT `name`,`level`,`vol_points`,`prev_vol_exp` FROM `volunteer` WHERE `username`='$un' ");
                $st->execute();
                $volprofile = $st->fetchAll();
                // print_r($volprofile);
                $voldata = [
                  'volprofile' => $volprofile
                ];
                return ($voldata);
      }


      public function addbeneficiery()
      {  
            if (isset($_FILES['file'], $_POST['vol_id'])) {
                if($_POST['vol_id']==$_SESSION['id']){
                $msg = "Please Upload a file";
                $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/humanity/public/beneficiery_case/';
                $save_path = 'beneficiery_case/';
                $dest_path = $target_dir . basename($_FILES['file']['name']);
                $file_path = $save_path . basename($_FILES['file']['name']);
                if (!empty($_FILES['file']['tmp_name']) && filesize($_FILES['file']['tmp_name'])) {
                      if (file_exists($dest_path)) {
                          $msg = "This File already exists, please choose another or rename that file.";
                      } 
                      else if ($_FILES['file']['size'] > 500000) {
                        $msg = "File size is too large, please choose a file less than 500kb.";
                      } 
                      else {
                            //Getting id from Volunteer table that is corresponding to entered volunteer ID
                            $get_volid = $this->db->prepare("SELECT id FROM volunteer WHERE vol_id= :volid  ");
                            $get_volid->execute(array(
                              ':volid' => $_POST['vol_id']
                            ));

                            $result = $get_volid->fetchAll();
                            $count = $get_volid->rowCount();


                            if ($count > 0) {
                                foreach ($result as $tmp) :
                                  $id = $tmp['id'];
                                endforeach;
                                //Inserting Fetched Volunteer id to beneficiary case table
                                $st = $this->db->prepare('INSERT INTO beneficiery_case(vol_id,case_path) VALUES (:id,:path)');
                                $st->execute(array(
                                  ':id' => $id,
                                  ':path' => $file_path
                                ));
                                move_uploaded_file($_FILES['file']['tmp_name'], $dest_path);
                                //Generating custom id
                                $custom_id=$this->db->prepare("SELECT id FROM beneficiery_case WHERE case_path=:case_path");
                                $custom_id->execute(array(
                                  ':case_path' => $file_path,
                                ));
                                $cid_result = $custom_id->fetchAll();
                                $count2 = $custom_id->rowCount();
                                if ($count2 > 0) {
                                    foreach ($cid_result as $cidtmp) :
                                        if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
                                          $customid ="BCASEHB00".$cidtmp['id'];
                                        }
                                        else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
                                          $customid ="BCASEHB0".$cidtmp['id'];
                                        }
                                        else if(strlen($cidtmp['id'])>0){
                                          $customid ="BCASEHB".$cidtmp['id'];
                                        };
                                    endforeach;

                                    $cidstmt = $this->db->prepare('UPDATE `beneficiery_case` SET beneficiery_id=:customid WHERE case_path=:case_path');
                                    $cidstmt->execute(array(
                                      ':case_path' => $file_path,
                                      ':customid'=>$customid,
                                    ));
                                }
                                $msg = "File uploaded successfully!";
                            } 
                            else {
                              $msg = "File upload  Failed!";
                            }
                      }
                } 
                else {
                  $msg = 'Please upload a file!';
                }
              }
              else{
                $msg = "Volunteer ID does not match!";
              }
          }
          $pageData = [
              'msg' => $msg
            ];
          return $pageData;
      }


      public function get_vol_activity_list()
      {
              //Upcoming ACtivities
              $st = $this->db->prepare('SELECT * FROM vol_activity WHERE status="1" ORDER BY id ');
              $st->execute();
              $upcoming = $st->fetchAll();

              //Finished Activities
              $stmt = $this->db->prepare('SELECT * FROM vol_activity WHERE status="0" ORDER BY id ');        
              $stmt->execute();
              $finished = $stmt->fetchAll();

              //All the data that has to be return from this functon is added to an associative array
              $pageData = [
                'upcoming' => $upcoming,
                'finished'=> $finished
              ];
              return ($pageData);
      }

      





      public function reg_staff()
      {
            $vid=Session::get('id');
            $st = $this->db->prepare('SELECT * FROM volunteer WHERE vol_id=:vid ');
            $st->execute(array(
              ':vid'=>$vid,
            ));
            $result =  $st->fetchAll();
            //Check whether user already exist
            $nic_check = $result['nic'];
            $st1 = $this->db->prepare("SELECT * FROM staff WHERE nic=:nic");
            $st1->execute(array(
              ':nic' => $nic_check
            ));
            $row_count = $st1->rowCount();
            if($row_count>0){
                $msg = "User already Exist!";
                  
            }
            else{
                  // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
                  $name = $result['name'];
                  $nic = $result['nic'];
                  $email = $result['email'];
                  $address = $result['address'];
                  $contact = $result['contact'];
                  $dob = $result['dob'];
                  $gender = $result['gender'];
                  $stmt = $this->db->prepare('INSERT INTO `staff` (`name`,`nic`, `email`,`contact`, `address`,`dob`,`gender`) VALUES ( ?, ?,?, ?, ?,?,?)');
                  $stmt->execute([$name, $nic, $email, $contact, $address, $dob,  $gender]);
                  $custom_id=$this->db->prepare("SELECT id FROM staff WHERE nic=:nic");
                  $custom_id->execute(array(
                      ':nic' => $nic,
                  ));
                  $cid_result = $custom_id->fetchAll();
                  $count = $custom_id->rowCount();
                  if ($count > 0) {
                        foreach ($cid_result as $cidtmp) :
                          if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
                              $cid ="STFHB00".$cidtmp['id'];
                          }
                          else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
                              $cid ="STFHB0".$cidtmp['id'];
                          }
                          else if(strlen($cidtmp['id'])>0){
                            $cid ="STFHB".$cidtmp['id'];
                          };
                        endforeach;
                        $cidstmt = $this->db->prepare('UPDATE `staff` SET staff_id=:cid WHERE nic=:nic');
                        $cidstmt->execute(array(
                          ':nic' => $nic,
                          ':cid'=>$cid,
                        ));
                  }                           
                  $msg = "Request submitted successfully!";
                  header('location: ../index');
            }
                  return ($msg);
      }

      public function run_viewtoedit_profile(){
            /*    $vid=Session::get('id');
                $st = $this->db->prepare('SELECT * FROM volunteer WHERE vol_id=:vid ');
                $st->execute(array(
                  ':vid'=>$vid,
                ));
                $data = $st->fetchAll();
                $st2 = $this->db->prepare('SELECT * FROM user WHERE username=:vid ');
                $st2->execute(array(
                  ':vid'=>$vid,
                ));
                $data2 = $st2->fetchAll();
                $msg="hi";
                $pageData = [
                  'data' => $data,
                  'data2'=>$data2,
                  'msg'=>$msg,
                  'vid'=>$vid,
                  
                ];
                return ($pageData);*/
              
                $vol_id=$_SESSION['idp'];
          $st1 = $this->db->prepare("SELECT volunteer.address, volunteer.contact FROM volunteer WHERE volunteer.id = :id");
          $st1->execute(array(
            ':id'=>$vol_id
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
                $getdata = $this->db->prepare("SELECT userlogin_id FROM volunteer WHERE id = :id");
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
                  $updatebuyer = $this->db->prepare("UPDATE buyer SET address = :address, contact = :contact WHERE id = :id");
                  $updatebuyer->execute(array(
                    ':address'=>$address,
                    ':contact'=>$contact,
                    ':id'=>$id
                  ));
                  header('location: ../Volunteer/index');
                }
                header('location: ../Volunteer/edit_profile');
      }

            /*    $pw = password_hash($password, PASSWORD_DEFAULT);
                $vid=Session::get('id');
                $stmt =$this->db->prepare('UPDATE `volunteer` SET email=:email,address:address,contact:contact WHERE vol_id=:vid');
                $stmt->execute(array(
                    ':email' => $email,
                    ':address' => $address,
                    ':contact' => $contact,
                    ':vid'=> $vid,
                ));
                $stmt2 =$this->db->prepare('UPDATE `user` SET password:password WHERE username=:username');
                $stmt2->execute(array(
                    ':password' => $pw,
                    ':username'=> $vid,
                ));                       
                $msg = "Form data updated successfully!";
                header('location: ../volunteer/edit_profile');            
                $pageData = [
                  'msg' => $msg
                  
                ];
                return ($pageData);
              }*/
      
      public function change_password(){
        if (!empty($_POST)){
     
          $oldpwd=$_POST['oldpwd'];
          $newpwd=$_POST['newpwd'];
          $rnewpwd=$_POST['rnewpwd'];
          $id=$_SESSION['idp'];
    
          $hasholdpw =  password_hash($oldpw, PASSWORD_DEFAULT);
    
          $getdata = $this->db->prepare("SELECT userlogin_id FROM volunteer WHERE id = :id");
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
              header('location: ../volunteer/Index');
            }
          }
        }
        header('location: ../volunteer/edit_profile');

      }

      public function vol_leaderboard(){ 

                $stmt = $this->db->prepare('SELECT * FROM volunteer WHERE status="1"  ORDER BY vol_points DESC');        
                $stmt->execute();
                $contacts = $stmt->fetchAll();
                //All the data that has to be return from this functon is added to an associative array
                $pageData = [
                  'contacts'=> $contacts,
                ];
                return ($pageData);
      }


      public function vol_participate(){

                $vid=Session::get('id');
                $stmt = $this->db->prepare('SELECT vol_activity.name ,  vol_activity.start_date_time , vol_activity.point  
                From vol_activity
                    INNER JOIN marking_attendance 
                      ON 
                      vol_activity.id  = marking_attendance.activity_id
                    INNER JOIN  volunteer 
                      ON 
                      marking_attendance.vol_id = volunteer.id 
                    WHERE 
                    volunteer.vol_id=:vid  '
                );     
                $stmt->execute(array(
                  ':vid'=> $vid,
                ));
                $activities = $stmt->fetchAll();
                $pageData = [
                  'activities'=> $activities,
                ];
                return ($pageData);
          }
      }