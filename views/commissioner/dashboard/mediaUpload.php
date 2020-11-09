<?php $page = 'media';
$title = 'Media';
$style = 'com-dash-media.css';
include "com-dash-header.php"; ?>

<div class="grid-container">
  <div class="content upload">
    <h2>Upload Image</h2>
    <form action="run_mediaUpload" method="post" enctype="multipart/form-data">
      <label for="image">Choose Image</label>
      <input type="file" name="image" accept="image/*" id="image">
      <label for="title">Title</label>
      <input type="text" name="title" id="title">
      <label for="description">Description</label>
      <textarea name="description" id="description"></textarea>
      <input type="submit" value="Upload Image" name="submit">
    </form>
    <p><?= $msg ?></p>
  </div>



</div>


<?php include "com-dash-footer.php" ?>