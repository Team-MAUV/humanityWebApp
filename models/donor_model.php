<?php

class donor_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function donor_stat(){
    $did=Session::get('id');
    $stmt1 = $this->db->prepare('SELECT * FROM donor WHERE don_id=:did  ');        
    $stmt1->execute(array(
        ':did'=> $did,
      ));
     $donation = $stmt1->fetchAll();
     $count =  $stmt1->rowCount();


            if ($count > 0) {
              foreach ($donation as $tmp) :
                $donorid = $tmp['id'];
              endforeach;
            }

     $stmt2 = $this->db->prepare('SELECT MAX(amount) AS maxim FROM donation WHERE don_id=:doid  ');        
    $stmt2->execute(array(
        ':doid'=> $donorid,
      ));
     $maxcon = $stmt2->fetchAll();

     $stmt2 = $this->db->prepare('SELECT MAX(date) AS maximd FROM donation WHERE don_id=:doid  ');        
    $stmt2->execute(array(
        ':doid'=> $donorid,
      ));
     $latestcon = $stmt2->fetchAll();

     $stmt3 = $this->db->prepare('SELECT COUNT(id) AS donc FROM donor ');        
     $stmt3->execute();
      $donnum = $stmt3->fetchAll();

      $stmt4 = $this->db->prepare('SELECT * FROM donation WHERE don_id=:doid ORDER BY date DESC LIMIT 3');        
      $stmt4->execute(array(
        ':doid'=> $donorid,
      ));
      $latedon = $stmt4->fetchAll();
 
  //All the data that has to be return from this functon is added to an associative array
  $pageData = [
    'donation'=> $donation,
    'maxcon'=>$maxcon,
    'latestcon'=>$latestcon,
    'donnum'=>$donnum,
    'latedon'=>$latedon,
    
  ];
  return ($pageData);

  }


}