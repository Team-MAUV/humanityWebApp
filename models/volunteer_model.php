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
    echo $un;
    $st = $this->db->prepare("SELECT `name`,`level`,`vol_points`,`prev_vol_exp` FROM `volunteer` WHERE `username`='$un' ");
    $st->execute();
    $volprofile = $st->fetchAll();
    print_r($volprofile);
    $voldata = [
      'volprofile' => $volprofile
    ];
    return ($voldata);
  }

  public function addbeneficiery()
  {
    $msg = '';
    if (isset($_FILES['file'], $_POST['vol_id'])) {
      $target_dir = $_SERVER['DOCUMENT_ROOT'] . '/humanity/public/beneficiery_case/';
      $save_path = 'beneficiery_case/';

      $dest_path = $target_dir . basename($_FILES['file']['name']);
      $file_path = $save_path . basename($_FILES['file']['name']);

      if (!empty($_FILES['file']['tmp_name']) && filesize($_FILES['file']['tmp_name'])) {
        if (file_exists($dest_path)) {
          $msg = "This File already exists, please choose another or rename that file.";
        } else if ($_FILES['file']['size'] > 500000) {
          $msg = "File size is too large, please choose a file less than 500kb.";
        } else {

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
            $msg = "File uploaded successfully!";
          } else {
            $msg = "File upload  Failed!";
          }
        }
      } else {
        $msg = 'Please upload a file!';
      }
    }

    $pageData = [

      'msg' => $msg
    ];
    return $pageData;
  }
}
