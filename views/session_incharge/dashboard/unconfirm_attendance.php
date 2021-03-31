<?php $page = 'unconfirm_attendance';
include "sess_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">






<!DOCTYPE html>
<html>
<head>
	<title>unconfirm attendance</title>

  <link rel="stylesheet" href="<?= URL ?>public/css/sess_dash_attendance.css" />
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="contact-box">
			<div class="left" > <img src="<?= URL ?>public/images/attend.png" alt="img" width="500" height="500"/> </div>
			<div class="right">
				<h2> Unconfirmed Attendance Marking</h2>
				<input type="text" class="field" placeholder="Event ID:">
				
        <input type="text" class="field" placeholder="Date:">
        <input type="text" class="field" placeholder="Volunteer ID:">
			
			
				<button class="btn">Send</button>
			</div>
		</div>
	</div>
</body>
</html>

<?php include "sess_footer.php" ?>