<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Simple Layouts</title>

  <link rel="stylesheet" href="<?= URL ?>public/css/vol-addnewbene.css" />


</head>
<?php $page = 'addnewbene';
include "vol_dash_header.php"; ?>


<div class="grid-container">



<h1>New Beneficiery Case file</h1>
    <form action="addbeneficiery" method="POST" id="beneform" enctype="multipart/form-data">
    <img src="<?=URL?>public/images/upload.svg" class="floatRight">
        <ul class="voldata">
        
            
            <li>
                Volunteer ID: <input type="text" name="vol_id" id="vid" required>
            </li>
            <li>
                <div class="formcss">
                    <p style="align-content: center;">Upload the file: </p>
                    <input type="file" id="beneficierycase" name="file" accept="file/*" class="file">
                    <input type="submit" class="btn" value="Upload"></div>
            </li>
        </ul>


    </form>
    <p><?= $msg ?></p>








</div>


<?php include "vol_dash_footer.php" ?>
</html>