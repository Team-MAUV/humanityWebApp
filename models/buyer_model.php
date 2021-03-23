<?php
class buyer_model extends Model{
    public function __construct()
  {
    parent::__construct();
  }

  public function view_buyerdash(){
    //return available products
    $id=$_SESSION['idp'];
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
  //  $st2 = $this->db->prepare('SELECT * FROM product WHERE won_buy_id IS NOT NULL AND availability = 0 ORDER BY bid_end_time DESC LIMIT 5');
    $st2 = $this->db->prepare('SELECT product.product_id, product.name, product.type, product.highest_bid_amount, product.bid_end_time, product.product_path, buyer.buy_id, buyer.name AS buy_name FROM product INNER JOIN buyer ON product.won_buy_id = buyer.id WHERE product.won_buy_id IS NOT NULL AND availability = 0 ORDER BY bid_end_time DESC LIMIT 5');
    $st2->execute();
    $winbid_list = $st2->fetchAll();
    $win_count = $st2->rowCount();
    if($win_count == 0){
      $msg2 = "No recent records avilable";
      
    }else{
      $msg2 = "";
    //  foreach ($winbid_list as $wlist) :
      //  $buyid = $wlist['won_buy_id'];
        
      //  $st3 = $this->db->prepare('SELECT * FROM buyer WHERE id = :buyerid');
       // $st3->execute(array(
       // ':buyerid' => $buyid
       // ));
       // $buydata = $st3->fetchAll();
      
      //  $wlist['buy_name'] = $buydata['name'];
        

    //  endforeach;
    }
    $st3 = $this->db->prepare('SELECT * FROM bid WHERE buy_id = :bid');
    $st3->execute(array(
      ':bid'=>$id
    ));
    $bidcount = $st3->rowCount();
    
    $st4 = $this->db->prepare('SELECT DISTINCT product_id FROM bid WHERE buy_id = :bid');
    $st4->execute(array(
      ':bid'=>$id
    ));
    $prdcount = $st4->rowCount();
    $st5 = $this->db->prepare('SELECT * FROM product WHERE won_buy_id = :bid AND availability = 0');
    $st5->execute(array(
      ':bid'=>$id
    ));
    $wonprds = $st5->fetchAll();
    $woncount = $st5->rowCount();
    $pageData = [
      'prdlist' => $prd_list,
      'msg' => $msg,
      'winbid_list' => $winbid_list,
      'msgwinlist' => $msg2,
      'bidcount' => $bidcount,
      'prdcount' => $prdcount,
      'woncount' => $woncount,
      'wonprds' => $wonprds
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
    
      
    if($count == 1 ){
     // $msg = "Product not available!!! Product will be available soon ";    
      
      foreach ($product as $pd) :
        $prdid = $pd['id'];
        $bidstart = $pd['date'];
        $bidend = $pd['bid_end_time'];
      endforeach; 
      $cr_time = date("Y-m-d H:i:s");

      $bidendint=strtotime($bidend);
      $crtimeint=strtotime($cr_time);
      if($bidendint < $crtimeint){
        $productdata = [];
        $highestbid = [];
        $msg = "Product not available!!! Product will be available soon";
        $setavb = $this->db->prepare('UPDATE product SET availability = 0 WHERE id = :id');
        $setavb->execute(array(
          ':id'=>$prdid
        ));
      }else{
        $msg="";
        $st0 = $this->db->prepare('SELECT * FROM product WHERE id = :id');
        $st0->execute(array(
          ':id'=>$prdid
        ));
        $productdata = $st0->fetchAll();
        $buy_id = $_SESSION['idp'];
        $st1 = $this->db->prepare('SELECT MAX(bid_amount) AS max_bid FROM bid WHERE buy_id = :bid && product_id = :pid');
        $st1->execute(array(
          ':bid'=>$buy_id,
          ':pid'=>$prdid
        ));
        $highestbid = $st1->fetchAll();
        $bidcount = $st1->rowCount();
        if($bidcount == 0){
          $bidmsg = "You haven't bid for this product! ";
        }else{
          $bidmsg = "";
        }

      }
    
    
    
    }else{
      $msg = "Product not available!!! Product will be available soon";
      $productdata = [];
      $highestbid = [];
    }
    

     

    

    

      
    $pagedata = [
      'productdata' => $productdata,
      'msg' => $msg,
      'bidmsg' => $bidmsg,
      'highestbid' => $highestbid
      
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
     
      $st0 = $this->db->prepare("SELECT highest_bid_amount, starting_bid FROM product WHERE id = :pid");
      $st0->execute(array(
        ':pid' => $pid
      ));
      $data = $st0->fetchAll();

      foreach ($data as $dt) :
        $hbid = $dt['highest_bid_amount'];
        $sbid = $dt['starting_bid'];

      endforeach;
      //checking conditions for the bid
      if(($sbid < $value) && ($hbid < $value)){

       
        $st = $this->db->prepare('INSERT INTO bid(product_id,buy_id,bid_amount) VALUES (:prd_id, :buy_id, :bid_amount)');
        $st->execute(array(
          ':prd_id'=>$pid,
          ':buy_id'=>$buy_id,
          ':bid_amount'=>$value
        
        ));

        $count1 = $st->rowCount();
        if($count1 == 0){
          $bidmsg = "ERROR!! Your bid is not added!!!";
        }else{
        //when bid added update product table
          $st2 = $this->db->prepare('UPDATE product SET won_buy_id=:won_buy, highest_bid_amount=:bid WHERE (id=:pid AND availability=:avb)');
          $st2->execute(array(
            ':won_buy'=>$buy_id,
            ':bid'=>$value,
            ':pid'=>$pid,
            ':avb'=>1

          ));
          $count2 = $st2->rowCount();
          if($count2 == 0){
          //if an error -> then delete the rfecord from bid
            $st3 = $this->db->prepare('DELETE FROM bid WHERE (product_id=:prd_id AND buy_id=:buy_id AND bid_amount=:bid)');
            $st3->execute(array(
              'prd_id'=>$pid,
              ':buy_id'=>$buy_id,
              ':bid'=>$value
            ));
            $bidmsg = "ERROR!! Your bid is not added!!!";
          }else{
            $bidmsg = "bid added";
          }
        }
      }else{
        $bidmsg = "invalid bid amount";
      }
    }else{
      $bidmsg = "no data";
    }

    $pagedata = [
      'bidmsg' => $bidmsg
    ];
    
    return ($pagedata);
  }

    function edit_profile(){
      $bid = $_GET['id'];
      $st1 = $this->db->prepare("SELECT name, address, contact, email FROM buyer WHERE id = :id");
      $st1->execute(array(
        ':id'=>$bid
      ));
      $data = $st1->fetchAll();
      $count = $st1->rowCount();
      if($count == 0){
        $msg = "error!";
      }else{
        $msg = "";
      }
      $pagedata = [
        'data' => $data,
        'msg' => $msg
      ];
      
      return ($pagedata);
    }

  function save_new_profile_details(){
      if (!empty($_POST)) {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $address=$_POST['address'];

        $id=$_SESSION['idp'];

        $st = $this->db->prepare("UPDATE buyer SET name = :name, address = :address, contact = :contact, email = :email WHERE id = :id");
        $st->execute(array(
          ':name'=>$name,
          ':address'=>$address,
          ':contact'=>$contact,
          ':email'=>$email,
          ':id'=>$id
        ));
        
        $msg = "Updated Succesfully!";
    }else{
      $msg = "ERROR !!!";
      
    }

    $st1 = $this->db->prepare("SELECT name, address, contact, email FROM buyer WHERE id = :id");
    $st1->execute(array(
      ':id'=>$id
    ));
    $data = $st1->fetchAll();
    $pagedata = [
      'msg' => $msg,
      'data' => $data
    ];
    
    return ($pagedata);

  }
}  

  

