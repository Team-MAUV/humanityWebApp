<?php $page = 'addnewbene';
include "vol_dash_header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Simple Layouts</title>
        <link rel="stylesheet" href="<?= URL ?>public/css/vol-addnewbene.css" />
</head>


<div class="grid-container">
    <h1>New Beneficiery Case file</h1>
    <!-- Form to upload the beneficiary case file -->
    <form action="addbeneficiery" method="POST" id="beneform" enctype="multipart/form-data">
        <img src="<?= URL ?>public/images/upload.svg" class="floatRight">
        <ul class="voldata">
            <li>
                Volunteer ID: <input type="text" name="vol_id" id="vid" value="<?= $_SESSION['id']?>" required>
            </li>
            <li>
                <div class="formcss">
                        <!-- Check the maximum file size -->
                        <p style="align-content: center;">Upload the file: (Maximum file size uploadable : 500kB)</p>
                        <input type="file" id="beneficierycase" name="file" accept="file/*" class="file">
                        <input type="submit" class="btn" value="Upload">
                </div>
            </li>
        </ul>
    </form>
    <!-- Success/Error message will be printed here -->
    <p><?= $msg ?></p>
</div>


<?php include "vol_dash_footer.php" ?>
</html>