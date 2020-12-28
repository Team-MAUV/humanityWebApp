
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
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL ?>public/css/buy-pages.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/buyer_dash_viewproduct.css" />

    <title>Product Card</title>
</head>
<body>
    <div class="my">
        <div class="card">
            <div class="shoeBackground">
                <div class="gradients">
                 
                    <div class="gradient" color="green"></div>
                    
                </div>
               
          
             

          
    <img src="<?= URL ?>public/images/glass1.jfif" alt="img"class="shoe show" />

            </div>
            <div class="info">
                <div class="shoeName">
                    <div>
                        <h1 class="big">Glass </h1>
                        <span class="new">pd2020.1654</span>
                    </div>
                    <h3 class="small">Bidding Start Time: 12.12.2020</h3>
                    <h3 class="small">Bidding End Time: 12.12.2020</h3>
                </div>
                <div class="description">
                    <h3 class="title">Product Info</h3>
                    <p class="text">Collected from the volunteer's home</p>
                </div>
                <div class="color-my">
                    <h3 class="title">details</h3>
                    <div class="colors">
                       <h4>20kg</h4> <span class="color" primary="#29b864" color="green"></span>
                       <p> 8000.00 </p>
                </div>
                <div class="size-my">
                    <h3 class="title">current maximum bid</h3>
                    <div class="sizes">
                      Rs.8600.00
                    </div>
                    <h3 class="title">Your bid</h3>
                    <div class="sizes">
                      Rs.8300.00
                    </div>
                </div>
                <div class="buy-price">
                    
                    <a href="#" class="buy"><i class="fas fa-shopping-cart"></i>Bid</a>
                    <div class="price">
                       
                        <label for="bid">Rs <input type="text" placeholder="Rupees"> . <input type="text" placeholder="cents"></label>
                    </div>
                </div>
             
                <a href="<?= URL?>buyer/index"><button class="abc" type="button" >
          Back 
            </button></a>  
            </div>
        </div>
    </div>
</body>










<?php include "buyer_footer.php" ?>
</html>