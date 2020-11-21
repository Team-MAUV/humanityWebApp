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

    }}}
