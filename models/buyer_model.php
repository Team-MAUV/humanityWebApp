<?php
class buyer_model extends Model{
    public function __construct()
  {
    parent::__construct();
  }


  public function view_product(){
    $st = $this->db->prepare('SELECT * FROM product WHERE type="Glass"');  
    $st->execute();
    $product = $st->fetchAll();
    
    $pagedata = [
      'product' => $product
    ];
    return ($pagedata);
  }

  
}