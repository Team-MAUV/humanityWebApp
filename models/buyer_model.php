<?php
class buyer_model extends Model{
    public function __construct()
  {
    parent::__construct();
  }

  public function view_buyerdash(){

    $st = $this->db->prepare('SELECT * FROM product WHERE availability = 1');
    $st->execute();
    $prd_list = $st->fetchAll();
    $count = $st->rowCount();
    if($count == 0){
      $msg = "No avilable products. New products will add soon.!!!";
    }
    $cr_time = date("Y-m-d H:i:s");
    $st2 = $this->db->prepare('SELECT * FROM bid_session WHERE won_buy_id IS NOT NULL AND end_date_time < $cr_time ORDER BY end_date_time DESC LIMIT 5');
    $st2->execute();
    $winbid_list = $st2->fetchAll();
    $win_count = $st2->rowCount();
    if($win_count == 0){
      $msg2 = "No recent records avilable";
    }else{

      foreach ($winbid_list as $wlist) :
        $buyid = $wlist['won_buy_id'];
        $prdid = $wlist['product_id'];
      endforeach;
      
      $st3 = $this->db->prepare('SELECT * FROM buyer WHERE buyer_id = :buyerid');
      $st3->execute(array(
        ':buyerid' => $buyid
      ));
      $buyname = $st3->fetchAll();
      foreach($buyname as $bname) :
        $winbid_list['name'] = $bname['name'];
      endforeach;

      $st4 = $this->db->prepare('SELECT * FROM product WHERE product_id = :prdid');
      $st4->execute(array(
        ':prdid'=>$prdid
      ));
      $prd = $st4->fectchAll();
      foreach($prd as $prd) :
        $winbid_list['prd_type'] = $prd['type'];
      endforeach;

  
    }
    
    $pageData = [
      'prdlist' => $prd_list,
      'msg' => $msg,
      'winlist' => $winbid_list,
      'msgwinlist' => $msg2
    ];
    return ($pageData);
}
  

  public function view_product(){
    
    
    

    if($_GET['prd']=='Plastic'){
      $st = $this->db->prepare('SELECT * FROM product WHERE availability = 1 && type="Plastic"');   
    }else if($_GET['prd']=='Glass'){
      $st = $this->db->prepare('SELECT * FROM product WHERE availability = 1 && type="Glass"');
    }else if($_GET['prd']=='Paper'){
      $st = $this->db->prepare('SELECT * FROM product WHERE availability = 1 && type="Paper"');
    }else if($_GET['prd']=='Electronic'){
      $st = $this->db->prepare('SELECT * FROM product WHERE availability = 1 && type="Electronic"');
    }else if($_GET['prd']=='Other'){
      $st = $this->db->prepare('SELECT * FROM product WHERE availability = 1 && type="Other"');
    }
    $st->execute();
      $product = $st->fetchAll();
      $count = $st->rowCount();
    
      
      if($count == 0 ){
        $msg = "Product not available!!! Product will be available soon ";
        
        
      }else{
        $msg = "";
      }
      

       
      
        $pagedata = [
          'product' => $product,
          'msg' => $msg
          
        ];
    
      return ($pagedata);
    
  }
  
  function add_bid(){
    if (!empty($_POST)) {
      $rs = $_POST['rs'];
      $cts = $_POST['cts'];
      $pid = $_GET['prd'];
      $buy_id = $_SESSION['id'];
      $cr_time = date("Y-m-d H:i:s");
      $value = $rs + ($cts/100);
      
      $st = $this->db->prepare('INSERT INTO bid(product_id,buy_id,bid_amount,time) VALUES (:prd_id,:buy_id,:bid_amount,:time)');
      $st->execute(array(
        ':prd_id'=>$pid,
        ':buy_id'=>$buy_id,
        ':bid_amount'=>$value,
        ':time'=>$cr_time
      ));

      $count1 = $st->rowCount();
      if($count1 == 0){
        $bidmsg = "ERROR!!!";
    }else{
      $bidmsg = "Bid added succesfully!!!";
    }
  }else{
    $bidmsg = "no data";
  }
  $pagedata = [
    'bidmsg' => $bidmsg
  ];
  
  return ($pagedata);
  }
 
  

  
}