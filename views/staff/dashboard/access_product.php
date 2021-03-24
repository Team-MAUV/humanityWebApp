<?php $page = 'access_product';
include "staff_header.php"; ?>
<link rel="stylesheet" href="<?= URL ?>public/css/staff-layout_style.css" />

<div class="grid-container">



  <div id="breadcrum">

  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?= URL ?>public/css/staff_dash_access-product.css" />
        <title>Product card shop</title>
    </head>
    <body>

        <div class = "top_btns" style = " margin: 20px">
            <button onclick="view_avb()" style = "padding:20px;">Available Products</button>
            <button onclick="view_navb()" style = "padding:20px;">Older Products</button>
        </div>


        <div class = "avb_prdts" id = "avbPrdts" style = "display: block;">
        <div>
        <h1 style="background-color: black ;color:white" > Available Products </h1>
        <main class="main bd-grid">

        <?php foreach ($avbprdts as $prd) : ?>
            <article class="card">
				<h4><?= $prd['type'] ?></h4>
                <div class="card__img">
				
					<img src="<?= URL ?>public/<?= $prd['product_path'] ?>" alt="img"/>
                </div>
                <div class="card__name">
                    <p id = "bidstart">Bid Session Starts:<?= $prd['date'] ?></p>
                    <p id = "bidend">Bid Session Ends:<?= $prd['bid_end_time'] ?></p>
                </div>
                <div class="card__precis">
                 
                   
                    <div>
                        <p><?= $prd['description'] ?></p>
                        <span class="card__preci card__preci--now">Product Id: <?= $prd['product_id'] ?></span>
                        <span class="card__preci card__preci--now">Quantity: <?= $prd['volume'] ?></span>
                        <span class="card__preci card__preci--now">Starting Bid: <?= $prd['starting_bid'] ?></span>
                        
                            
                        <p><a href = "<?= URL?>staff/view_product?prdid=<?= $prd['id'] ?>"><button>View More</button></a></p>
                        <p><a href = "<?= URL?>staff/update_product?prdid=<?= $prd['id'] ?>"><button>Update Product</button></a></p>
                      
                    </div>
                    <button onclick = "return delete_prd()"> <a href="<?= URL?>staff/delete_product?prdid=<?= $prd['id'] ?>" id = "deletebtn" class="card__icon"> <i class="fa fa-trash"></i></a></button>
                    
                </div>
            </article>
           
            <?php endforeach; ?> 
        </div>
           
        
        
            <p><?= $msgavb ?></p>
       
       </div>

       <div class = "navb_prdts" id = "navbPrdts" style = "display: none;">
       <h1 style="background-color: black ;color:white" >Unsold Products </h1>
        <main class="main bd-grid">

        <?php foreach ($notavbprdts as $prd) : ?>
            <article class="card">
				<h4><?= $prd['type'] ?></h4>
                <div class="card__img">
				
					<img src="<?= URL ?>public/<?= $prd['product_path'] ?>" alt="img"/>
                </div>
                <div class="card__name">
				<p>bid session started:<?= $prd['date'] ?></p>
                <p>bid session ended:<?= $prd['bid_end_time'] ?></p>
                </div>
                <div class="card__precis">
                 
                   
                    <div>
					
                    <span class="card__preci card__preci--now">Product Id: <?= $prd['product_id'] ?></span>	
                    <span class="card__preci card__preci--now"><?= $prd['type'] ?></span>
                    <p><?= $prd['description'] ?></p>
                    <span class="card__preci card__preci--now">Starting Bid: <?= $prd['starting_bid'] ?></span>
                    <span class="card__preci card__preci--now">Quantity: <?= $prd['volume'] ?></span>
              
             </div>
                 
                </div>
            </article>
            <?php endforeach; ?> 
            <p><?= $msgnavb ?></p>
        </main>
        <h1 style="background-color: black ;color:white" >Sold Products </h1>
        <main class="main bd-grid">   
            <?php foreach ($soldprdts as $prd) : ?>
            <article class="card">
				<h4><?= $prd['type'] ?></h4>
                <div class="card__img">
				
					<img src="<?= URL ?>public/<?= $prd['product_path'] ?>" alt="img"/>
                </div>
                <div class="card__name">
				<p>bid session started:<?= $prd['date'] ?></p>
                <p>bid session ended:<?= $prd['bid_end_time'] ?></p>
                </div>
                <div class="card__precis">
                 
                   
                    <div>
					
                    <span class="card__preci card__preci--now">Product Id: <?= $prd['product_id'] ?></span>	
                    <p><?= $prd['description'] ?></p>
                    <span class="card__preci card__preci--now">Highest Bid: <?= $prd['highest_bid_amount'] ?></span>
					<span class="card__preci card__preci--now">Bid Won By: <?= $prd['buy_name'] ?></span>	
                    <span class="card__preci card__preci--now">Collected Status: <p  id = "collectedprd"><?= $prd['collected_status'] ?></p></span>
                    <p><a href = "<?= URL?>staff/view_product?prdid=<?= $prd['id'] ?>"><button>View More</button></a></p>
                    <p><a href = "<?= URL?>staff/collected_product?prdid=<?= $prd['id'] ?>"><button>Collected</button></a></p>    
                  <!--  <button onclick = "return collect_prd()"> <a href="<?= URL?>staff/collected_product?prdid=<?= $prd['id'] ?>" id = "collectbtn" class="card__icon">Collected</a></button> -->
             </div>
                 
                </div>
            </article>
            <?php endforeach; ?> 
            <p><?= $msgsld ?></p>
       
       </div>
       </main>  
		<script>
         function view_avb(){
            var avb = document.getElementById("avbPrdts");
            var navb = document.getElementById("navbPrdts");
            if(navb.style.display == "block"){
                navb.style.display = "none";  
            }
            avb.style.display = "block";
           
        }
        function view_navb(){
            var avb = document.getElementById("avbPrdts");
            var navb = document.getElementById("navbPrdts");
            if(avb.style.display == "block"){
                avb.style.display = "none";  
            }
            navb.style.display = "block";
          
        }
        function delete_prd(){
            
            var biddate = document.getElementById("bidstart");
            var d = new Date();
            var dsec = d.getTime();
            var stsec = Date.parse(biddate);
            if(dsec > stsec){
                alert("can not delete product while bid session is on!!!");
                return false;
            }else{
                var conf = confirm("conformation");
                if(conf == true){
                    alert("Product deleted!!!");
                }else{
                    alert("aborted!!!");
                    return false;
                }
            }
        }
        function collect_prd(){
            var stts = document.getElementById("collectedprd").innerHTML;
            if(stts == 1){
                alert("product alredy collected!");
                return false;
            }else{
                var conf = confirm("conformation");
                if(conf == true){
                    alert("Product collection status updated!");
                }else{
                    alert("aborted!!!");
                    return false;
                }
                
            }
            
        }
        
        </script>	
       
         
        

        <!-- ICONS -->
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    </body>
</html>































</div>
</div>

<?php include "staff_footer.php" ?>