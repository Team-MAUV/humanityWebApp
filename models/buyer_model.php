<?php
class buyer_model extends Model{
    public function __construct()
  {
    parent::__construct();
  }

  public function view_buyerdash(){
    //return available products
    $st = $this->db->prepare('SELECT * FROM product WHERE availability = 1');
    $st->execute();
    $prd_list = $st->fetchAll();
    $count = $st->rowCount();
    if($count == 0){
      $msg = "No avilable products. New products will add soon.!!!";
    }else{
      $msg = "";
    }
    $cr_time = date("Y-m-d H:i:s");
    // return last bid results
    $st2 = $this->db->prepare('SELECT * FROM product WHERE won_buy_id IS NOT NULL AND availability = 0 ORDER BY bid_end_time DESC LIMIT 5');
    $st2->execute();
    $winbid_list = $st2->fetchAll();
    $win_count = $st2->rowCount();
    if($win_count == 0){
      $msg2 = "No recent records avilable";
      
    }else{
      $msg2 = "";
      foreach ($winbid_list as $wlist) :
        $buyid = $wlist['won_buy_id'];
        $prdid = $wlist['product_id'];
      endforeach;
      
      $st3 = $this->db->prepare('SELECT * FROM buyer WHERE id = :buyerid');
      $st3->execute(array(
        ':buyerid' => $buyid
      ));
      $buydata = $st3->fetchAll();
      
      $winbid_list['buy_id'] = $buydata['buy_id'];
      

  
    }
    
    $pageData = [
      'prdlist' => $prd_list,
      'msg' => $msg,
      'winbid_list' => $winbid_list,
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
      $buy_id = $_SESSION['idp'];
      $cr_time = date("Y-m-d H:i:s");
      $value = $rs + ($cts/100);
      
      $st = $this->db->prepare("INSERT INTO `bid` (`product_id`,`buy_id`,`bid_amount`,`time`) VALUES (:prd_id,:buy_id,:bid_amount,:time");
      $st->execute(array(
        ':prd_id'=>$pid,
        ':buy_id'=>$buy_id,
        ':bid_amount'=>$value,
        ':time'=>$cr_time
      ));

      $count1 = $st->rowCount();
      if($count1 == 0){
        $bidmsg = $buy_id;
    }else{
        $bidmsg = "bid added";
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
  

  

