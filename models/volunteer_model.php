<?php

class volunteer_Model extends Model
{

  public function __construct()
  {
    parent::__construct();

  }
  

  public function vol_profile()
  {
     
    $un= $_SESSION['name'];
echo $un;
    $st = $this->db->prepare("SELECT `name`,`level`,`vol_points`,`prev_vol_exp` FROM `volunteer` WHERE `username`='$un' ");
    $st->execute();
    $volprofile=$st->fetchAll();
    print_r($volprofile);
    $voldata=[
        'volprofile' => $volprofile
    ];
    return($voldata);


  }


}

