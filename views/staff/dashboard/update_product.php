<?php $page = 'manage_bidsession';
include "staff_header.php"; ?>
<link rel="stylesheet" href="<?= URL ?>public/css/staff-layout_style.css" />

<div class="grid-container">



  <div id="breadcrum">

  <!DOCTYPE html>
<html>
<head>
	<title>Product Card</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= URL ?>public/css/staff_dash_manage.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/buyer_dash_viewproduct.css" />

</head>
<body>
<div>
<p>sacf : <?= $msg ?></p>
</div> 






<div class="my">
        <div class="card">
        
        <?php foreach ($data as $prd) : ?>
            <div class="shoeBackground">
                <div class="gradients">
                 
                    <div class="gradient" color="green"></div>
                    
                </div>
               
          
             

          
    <img src="<?= URL ?>public/<?= $prd['product_path'] ?>" alt="img"class="shoe show" />

            </div>
            <div class="info">
           
                <div class="shoeName">
                    <div>
                        <h1 class="big"><?= $prd['name'] ?></h1>
                        <span class="new" id="prdid"><?= $prd['product_id'] ?> </span>
                    </div>
                    
                </div>
                <div class="description">
                    <h3 class="title">Product Info</h3>
                    <p class="text"><?= $prd['description'] ?></p>
                    <p class="text">Added By:<?= $prd['staff_id'] ?></p>
                </div>
                <div class="color-my">
                    <h3 class="title">details</h3>
                    <div class="colors">
                       <h4>Quantity(kg) : <?= $prd['volume'] ?></h4> <span class="color" primary="#29b864" color="green"></span>
                       <p>Starting Bid(Rs) : <?= $prd['starting_bid'] ?> </p>
                </div>
                <div class="size-my">
                <h3 class="title">Bid Session Info</h3>
                    <h3 class="small">Bidding Start Time: <?= $prd['date'] ?></h3>
                    <h3 class="small">Bidding End Time: <?= $prd['bid_end_time'] ?></h3>
                    <h3 class="title">current maximum bid :</h3>
                    <div class="sizes">
                      Rs.8600.00
                    </div>
                    <button class="abc" type="button" >View All Bids</button>
                </div>



                <form action= "add_bid?prd=<?= $prd['id'] ?>" id="bidform" name="bidform" method="post">
                <div class="buy-price">
                    
                    
                    <button class="abc" value="submit">Update Product</button>
                    
                    
                </div>
                
                </form>
                <a href="<?= URL?>staff/access_product"><button class="abc" type="button" >Back</button></a> 
           
            </div>
            <?php endforeach; ?>
            <p><?= $msg ?></p>
            
            
        </div>
    </div>


 

 <script src="<?= URL ?>public/js/manage.js" type="text/javascript"></script>
</body>
</html>
















  </div>
</div>

<?php include "staff_footer.php" ?>