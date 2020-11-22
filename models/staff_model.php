<?php

class staff_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }
  public function add_product(){
    if(!empty($_POST)){
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $category = isset($_POST['Category']) ? $_POST['Category'] : '';
      $volume = isset($_POST['volume']) ? $_POST['volume'] : '';
      $starting_bid = isset($_POST['startingbid']) ? $_POST['startingbid'] : '';
      $bidding_date = isset($_POST['Bidding_Date']) ? $_POST['Bidding_Date'] : '';
      $description = isset($_POST['subject']) ? $_POST['subject'] : '';
    


      $stmt2=$this->db->prepare('INSERT INTO `product` (`name`,`type`,`date`,`description`,`starting_bid`,`volume`) VALUES ( :name. :type, :date, :description, :starting_bid, :volume)');
      $stmt2->execute(array(
        ':name'=>$name,
        ':type'=>$category,
        ':date'=>$bidding_date,
        ':description'=>$description,
        ':starting_bid'=>$starting_bid,
        ':volume'=>$volume,
       
      ));
//product name should be unique????
      $get_volid = $this->db->prepare("SELECT id FROM product WHERE name= :pname  ");
      $get_volid->execute(array(
        ':pname' => $_POST['name']
      ));

      $result = $get_volid->fetchAll();
      $count = $get_volid->rowCount();


     
      if ($count > 0) {
        foreach ($result as $cidtmp) :
          if(strlen($cidtmp['id'])==1 && strlen($cidtmp['id'])>0){
            $cid ="PRDHB00".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])==2 && strlen($cidtmp['id'])>0){
            $cid ="PRDHB0".$cidtmp['id'];
          }else if(strlen($cidtmp['id'])>0){
            $cid ="PRDHB".$cidtmp['id'];
          };
          
        endforeach;

        $cidstmt = $this->db->prepare('UPDATE `product` SET product_id=:cid WHERE name=:name');
        $cidstmt->execute(array(
        ':name' => $_POST['name'],
        ':cid'=>$cid,
        ));
      }
    }
  }




<<<<<<< HEAD


}




=======
      $stmt2=$this->db->prepare('INSERT INTO `product` (`name`,`type`,`date`,`description`,`starting_bid`,`volume`) VALUES ( :name. :type, :date, :description, :starting_bid, :volume)');
      $stmt2->execute(array(
        ':name'=>$name,
        ':type'=>$category,
        ':date'=>$bidding_date,
        ':description'=>$description,
        ':starting_bid'=>$starting_bid,
        ':volume'=>$volume,
       
      ));
>>>>>>> 294e30ac753638d976407c24c952824708b3fd08

    }}}
