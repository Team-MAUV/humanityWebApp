
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
				<?php foreach ($data as $dt) : ?>
				<form name="upddata" action="save_new_profile_details" method="POST" enctype="multipart/form-data" >	
					<label for="name">Name:</label>
					<input type="text" class="field" placeholder="Your Name" name="name" value="<?= $dt['name'] ?>">
					<label for="name">E-Mail:</label>
					<input type="email" class="field" placeholder="Your Email" name="email" value="<?= $dt['email'] ?>">
					<label for="name">Contact Number:</label>
					<input type="text" class="field" placeholder="Phone" name="contact" value="<?= $dt['contact'] ?>">
					<label for="name">Address:</label>
					<textarea placeholder="Address" class="field" name="address" ><?= $dt['address'] ?></textarea>
					<button class="submit" value="Submit"><a href = "<?= URL ?>Buyer/edit_profile?id=<?= $_SESSION['idp'] ?>"></a>Update</button>
					<button class="btn">Change Username / Password</button>
				</form>
				<?php endforeach; ?> 
				<p><?= $msg ?></p>
			</div>
			
		</div>
	</div>
</body>
</html>

















  </div>

</div>



</div>
<?php include "buyer_footer.php" ?>