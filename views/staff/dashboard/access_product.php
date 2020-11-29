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
        <h1 style="background-color: black ;color:white" > Market Products </h1>
        <main class="main bd-grid">
            <article class="card">
				<h4>Glass</h4>
                <div class="card__img">
				
					<img src="<?= URL ?>public/images/glass.jpg" alt="img"/>
                </div>
                <div class="card__name">
				<p>bid session: 20.12.2020</p>
                </div>
                <div class="card__precis">
                 
                   
                    <div>
					<p>Collect from the Hambantota city </p>
                        <span class="card__preci card__preci--before">50kg</span>
						<span class="card__preci card__preci--now">1749.00</span>
						<p><button>Update bid</button></p>
					
                    </div>
                    <a href="" class="card__icon"> <i class="fa fa-trash"></i></a>
                </div>
            </article>
			<article class="card">
				<h4>plastic </h4>
                <div class="card__img">
				
					<img src="<?= URL ?>public/images/plastic.jpg" alt="img"/>
                </div>
                <div class="card__name">
				<p>bid session: 10.01.2021</p>
                </div>
                <div class="card__precis">
                 
                   
                    <div>
					<p>Collect from Colombo Townhall</p>
                        <span class="card__preci card__preci--before">250kg</span>
						<span class="card__preci card__preci--now">5000.00</span>
						<p><button>Update bid</button></p>
					
                    </div>
                    <a href="" class="card__icon"> <i class="fa fa-trash"></i></a>
                </div>
            </article>
			<article class="card">
				<h4>Glass</h4>
                <div class="card__img">
				
					<img src="<?= URL ?>public/images/glass.jpg" alt="img"/>
                </div>
                <div class="card__name">
				<p>Bid session : 20.12.2020</p>
                </div>
                <div class="card__precis">
                 
                   
                    <div>
					<p>Collect from the Staff's Home</p>
                        <span class="card__preci card__preci--before">25kg</span>
						<span class="card__preci card__preci--now">1300.00</span>
						<p><button>Update bid</button></p>
					
                    </div>
                    <a href="" class="card__icon"> <i class="fa fa-trash"></i></a>
                </div>
            </article>
			<article class="card">
				<h4>paper</h4>
                <div class="card__img">
				
					<img src="<?= URL ?>public/images/paper.jpg" alt="img"/>
                </div>
                <div class="card__name">
				<p>bid session: 20.12.2020</p>
                </div>
                <div class="card__precis">
                 
                   
                    <div>
					<p>Collect from near branch's shops</p>
                        <span class="card__preci card__preci--before">500kg</span>
						<span class="card__preci card__preci--now">3900.00</span>
						<p><button>Update bid</button></p>
					
                    </div>
                    <a href="" class="card__icon"> <i class="fa fa-trash"></i></a>
                </div>
            </article>

         
        </main>

        <!-- ICONS -->
        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    </body>
</html>































</div>
</div>

<?php include "staff_footer.php" ?>