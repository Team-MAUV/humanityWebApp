<?php
class buyer_model extends Model{
    public function __construct()
  {
    parent::__construct();
  }


  public function view_glass(){
    $st = $this->db->prepare('SELECT * FROM product WHERE type="Glass"');  
    $st->execute();
    $product = $st->fetchAll();
    
    
    $pagedata = [
      'product' => $product
    ];
    return ($pagedata);
  }
  public function view_plastic(){
    $st = $this->db->prepare('SELECT * FROM product WHERE type="Plastic"');  
    $st->execute();
    $product = $st->fetchAll();
   
    $pagedata = [
      'product' => $product
    ];
    return ($pagedata);
    
  }
  public function view_paper(){
    $st = $this->db->prepare('SELECT * FROM product WHERE type="Paper"');  
    $st->execute();
    $product = $st->fetchAll();
   
      $pagedata = [
        'product' => $product
      ];
      return ($pagedata);
    }
    
  
  public function view_electronic(){
    $st = $this->db->prepare('SELECT * FROM product WHERE type="Electronic"');  
    $st->execute();
    $product = $st->fetchAll();
    
    $pagedata = [
      'product' => $product
    ];
    return ($pagedata);
  }
  public function view_other(){
    $st = $this->db->prepare('SELECT * FROM product WHERE type="Other"');  
    $st->execute();
    $product = $st->fetchAll();
    
    $pagedata = [
      'product' => $product
    ];
    return ($pagedata);
  }

  
}