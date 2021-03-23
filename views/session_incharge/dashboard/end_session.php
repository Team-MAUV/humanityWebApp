<?php $page = 'end_session';
include "sess_header.php"; ?>


<div class="grid-container">



  <div id="breadcrum">






<!DOCTYPE html>
<html>
<head>
	<title>uncinfirm attendance</title>

  <link rel="stylesheet" href="<?= URL ?>public/css/sess_dash_attendance.css" />
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="contact-box">
			<div class="left" > <img src="<?= URL ?>public/images/attend.png" alt="img" width="500" height="500"/> </div>
			<div class="right">
				<h2> Are you sure want to end the session?</h2>
			
				<a  class="btn" href="<?= URL ?>sessionIncharge/close_session">Yes</a>
			
				<a  class="btn" href="<?= URL ?>sessionIncharge">No</a>
			</div>
		</div>
	</div>
</body>
</html>

<?php include "sess_footer.php" ?>