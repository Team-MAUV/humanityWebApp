
<?php $page = 'product';
$title = 'Product';
$style = 'buy-pages.css';
$jsFile = 'buyer.js';
include "buyer_header.php"; ?>

<div class="grid-container">



  <div id="breadcrum">

  <!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="contact-box">
      <div class="left" > </div>  
      			<div class="right">
				<h2>Edit Profile </h2>
                <label for="name">Name: <?= $buyerdata['name'] ?></label>
				<input type="text" class="field" placeholder="Your Name" name="name" value="<?= $buyerdata['name'] ?>">
				<input type="email" class="field" placeholder="Your Email" name="email">
        <input type="text" class="field" placeholder="Phone" name="contact">
       
				<textarea placeholder="Address" class="field" name="address"></textarea>
				<button class="btn">Update</button>
                <button class="btn">Change Username / Password</button>
			</div>
		</div>
	</div>
</body>
</html>

















  </div>

</div>



</div>
<?php include "buyer_footer.php" ?>