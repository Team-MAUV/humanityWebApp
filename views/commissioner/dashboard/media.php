<?php $page = 'media';
$title = 'Media';
$style = 'com-dash-media.css';

include "com-dash-header.php"; ?>


<div class="grid-container">
  <div class="content home">
    <h2>Gallery </h2>
    <p>Welcome to the Humanity Gallery, Let's share Love & Compassion!</p>
    <a href="mediaUpload" class="upload-image">Upload Image</a>
    <div class="images">
      <?php foreach ($images as $image) : ?>


        <a href="#">
          <img src="<?= URL ?>public/media/<?= $image['path'] ?>" alt="<?= $image['description'] ?>" data-id="<?= $image['id'] ?>" data-title="<?= $image['title'] ?>" width="300" height="200">
          <span><?= $image['description'] ?></span>
        </a>

      <?php endforeach; ?>
    </div>
  </div>
  <div class="image-popup"></div>


  <script src="<?= URL ?>public/js/mediaGalleryView.js"></script>

</div>

<?php include "com-dash-footer.php" ?>