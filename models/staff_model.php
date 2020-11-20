<?php

class staff_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }
  public function addNewProduct(){
    if(!empty($_POST)){
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $category = isset($_POST['Category']) ? $_POST['Category'] : '';
      $volume = isset($_POST['volume']) ? $_POST['volume'] : '';
      $bidding_date = isset($_POST['Bidding_Date']) ? $_POST['Bidding_Date'] : '';
      $subject = isset($_POST['subject']) ? $_POST['subject'] : '';

      
    }
  }




}





