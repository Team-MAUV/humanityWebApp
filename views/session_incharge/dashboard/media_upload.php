<?php $page = 'media_upload';
include "sess_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">

  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
  <link rel="stylesheet" href="<?= URL ?>public/css/sess_dash_imagesample.css" />

</head>
<body>
<div class="container">
		<div class="contact-box">
			<div class="left" > <img src="<?= URL ?>public/images/form.png" alt="img" width="500" height="500"/> </div>
			<div class="right">
				<h2>Upload Image </h2>
				<input type="text" class="field" placeholder="Event ID:">
				<input type="text" class="field" placeholder="Event Name:">
        <input type="text" class="field" placeholder="Date:">
        <input type="file" id="myFile" name="filename">
			
				<button class="btn">Submit</button>
			</div>
		</div>
	</div>



</body>


































</div>
</div>

<?php include "sess_footer.php" ?>


</html>

