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



				<form method="post" action="run_media_upload" enctype="multipart/form-data">
				<label for="id">Event-ID</label>
			
				<input type="text" class="field" placeholder="a " id="actID" name="actID">
				<label for="id">Session incharge ID</label>
			
				<input type="text" class="field" placeholder="a " id="incharge_id" name="incharge_id">
				<label for="id">Date </label>
                <input type="text" class="field" placeholder="Date:" id="date" name="date">
                <input type="file" id="image" name="image" multiple>
			

			<!--multiple-->
				<button class="btn" value="submit" onclick="return addvalidact();" >Submit</button>
				</form>

			
			</div>
			<p><?= $msg ?></p>
		</div>
		
	</div>
	<script>
function addvalidact(){
	var actId = document.getElementById("actID").value; 
    var date= document.getElementById("date").value;
	var fileInput =  document.getElementById('myFile');
	var filePath = fileInput.value;
	var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

	if(actID == "")
	{
     alert("Please enter Activity ID.");
     return false;
	}
	else{
		if(incharge_id== ""){
			  alert("Please enter inchargeid");
              return false;
		      }
	else{
		if(date== ""){
			  alert("Please enter Date");
              return false;
		      }
		else{
			if(image==NULL){
				alert("Please choose files");
              return false;
			}

	
	    else{
			  if(actID==NULL)
		   {
            alert("Please enter  Activity ID.");
			return false;
		   }
		   else{
			if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
			else 
            {
              
                // Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview').innerHTML = 
                            '<img src="' + e.target.result
                            + '"/>';
                    };
                      
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
		   }
	        }
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

