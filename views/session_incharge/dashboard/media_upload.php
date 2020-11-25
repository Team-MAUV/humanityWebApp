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
  <link rel="stylesheet" href="<?= URL?> public/css/sess_dash_upload.css"/ >
</head>
<body>
<div class="row">
   
        <form action="#">
        <img src="<?= URL ?>public/images/form.png" alt="img" width="200px" height="150px"/>
         <br>
            <label for="event_Id">Event_Id: </label>
          <br>  <input type="text" id="eId" name="eId"><br><br>
        
            <label for="event_name">EventName: </label>
            <br>   <input type="text" id="ename" name="ename"><br><br>

  <input type="submit" value="Submit"> <br>   <br>  <br> 
  <button class="btn"><i class="fa fa-upload"></i> Upload </button>        
            </form>
        
    </div>

</body>


































</div>
</div>

<?php include "sess_footer.php" ?>


</html>

