<?php $page = 'staff_report';
include "staff_header.php"; ?>



  <div id="breadcrum">

<head>
	<meta charset="UTF-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Report Upload </title>
	<link rel="stylesheet" href="<?= URL ?>public/css/staff_dash_report.css" />

</head>

<div class="grid-container">



<h1>Upload New Report </h1>
<form action="addreport" method="POST" id="report" enctype="multipart/form-data">
	<img src="<?= URL ?>public/images/upload.svg" class="floatRight">
	<ul class="voldata">


		<li class="line">
			Staff ID: <input type="text" name="staff_id" id="sid" required>
		</li>
		<li>
			<div class="formcss">
				<p style="align-content: center;">Upload the Report: </p>
				<input type="file" id="staffreport" name="file" accept="file/*" class="file">
				<input type="submit" class="btn" value="Upload">
			</div>
		</li>
	</ul>


</form>
<p><?= $msg ?></p>








</div>
    




<?php include "staff_footer.php" ?>
