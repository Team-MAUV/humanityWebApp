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
				<form method="post" action="multi_file_upload" enctype="#">
				<label for="id">Event-ID</label>
				<?php foreach ($sinprofile as $sin) : ?>
				<input type="text" class="field" placeholder="<?= $sin['vol_activityId'] ?> " id="actID">
				<?php endforeach; ?>  
        <input type="text" class="field" placeholder="Date:" id="date">
        <input type="file" id="myFile" name="filename" multiple>
			
				<button class="btn" value="submit" onclick="return addvalidact();" >Submit</button>
				</form>
			</div>
		</div>
	</div>
	<script>
function addvalidact(){
	var actId = document.getElementById("actID").value; 
    var date= document.getElementById("date").value;

	if(actId == "")
	{
     alert("Please enter Activity ID.");
     return false;
	}
	else{
		if(date== ""){
			  alert("Please enter Date");
              return false;
		      }

	    else{
			  if(actId!==<?= $sin['vol_activityId'] ?>)
		   {
            alert("Please enter correct Activity ID.");
			return false;
		   }
	        }
}

}
</script>
    


</body>


































</div>
</div>

<?php include "sess_footer.php" ?>


</html>

