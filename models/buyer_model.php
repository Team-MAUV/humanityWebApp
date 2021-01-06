<?php
class buyer_model extends Model{
    public function __construct()
  {
    parent::__construct();
  }

  public function view_buyerdash(){

    $st = $this->db->prepare('SELECT * FROM product');
    $st->execute();
    $prd_list = $st->fetchAll();
    $count = $st->rowCount();
    if($count == 0){
      $msg = "No available products. New products will add soon.!!!";
    }

    
    $pageData = [
      'prdlist' => $prd_list,
      'msg' => $msg
    ];
    return ($pageData);
}
  

  public function view_product(){
    
    if($_GET['prd']=='Plastic'){
      $st = $this->db->prepare('SELECT * FROM product WHERE type="Plastic"');   
    }else if($_GET['prd']=='Glass'){
      $st = $this->db->prepare('SELECT * FROM product WHERE type="Glass"');
    }else if($_GET['prd']=='Paper'){
      $st = $this->db->prepare('SELECT * FROM product WHERE type="Paper"');
    }else if($_GET['prd']=='Electronic'){
      $st = $this->db->prepare('SELECT * FROM product WHERE type="Electronic"');
    }else if($_GET['prd']=='Other'){
      $st = $this->db->prepare('SELECT * FROM product WHERE type="Other"');
    }
    $st->execute();
      $product = $st->fetchAll();
      $count = $st->rowCount();
      if($count == 0){
        $msg = "Product not available!!! Product will be available soon ";
      }

      

      $pagedata = [
        'product' => $product,
        'msg' => $msg,
        
      ];
      return ($pagedata);
    
  }
  
  
  

  
}