
<?php $page = 'home';
include "buyer_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= URL ?>public/css/buy-pages.css" />
        <link rel="stylesheet" href="<?= URL ?>public/css/buyer_dash_viewproduct.css" />

        <title>Product Card</title>
    </head>
    <body>
        <div class="my">
            <div class="card">
        
            <?php foreach ($productdata as $prd) : ?>   
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
                        <h3 class="small">Bidding Start Time: <?= $prd['date'] ?></h3>
                        <h3 class="small">Bidding End Time: <?= $prd['bid_end_time'] ?></h3>
                    </div>
                    <div class="description">
                        <h3 class="title">Product Info</h3>
                        <p class="text"><?= $prd['description'] ?></p>
                    </div>
                    <div class="color-my">
                        <h3 class="title">details</h3>
                        <div class="colors">
                        <h4>Quantity(kg) : <?= $prd['volume'] ?></h4> <span class="color" primary="#29b864" color="green"></span>
                        <p>Starting Bid(Rs) : <?= $prd['starting_bid'] ?> </p>
                    </div>
                    <div class="size-my">
                        <h3 class="title">current maximum bid :</h3>
                        <div class="sizes">
                        <?= $prd['highest_bid_amount'] ?>
                        </div>
                        <spam id="uid"><?=$_SESSION['id']?></spam>
                        

                    </div>



                    <form action= "add_bid?prd=<?= $prd['id'] ?>" id="bidform" name="bidform" method="post">
                <?php endforeach; ?> 
                <?php foreach ($highestbid as $hbid) : ?> 
                    <h3 class="title">Your highest bid : </h3>
                        <div class="sizes">
                        <p><?= $bidmsg ?></p>
                        
                        <?= $hbid['max_bid'] ?>   
                        
                        </div>
                    <div class="buy-price">
                        
                        
                        <button class="buy" value="submit"><i class="fas fa-shopping-cart"></i>Bid</button>
                        
                        <div class="price">
                        
                            <label for="bid">Rs <input type="text" id="rs" name ="rs" placeholder="Rupees" value="0"> . <input type="text" id="cts" name="cts" placeholder="cents" value="00"></label>
                        </div>
                    </div>
                    
                    </form>
                    <a href="<?= URL?>buyer/index"><button class="abc" type="button" >
                    Back 
                    </button></a> 
            
                </div>
                <?php endforeach; ?>  
                <p><?= $msg ?></p>
                
                
            </div>
        </div>

        
    </body>










<?php include "buyer_footer.php" ?>
</html>