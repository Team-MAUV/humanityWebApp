<?php

class commissioner_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }



  public function get_reg_vol_profiles()
  {
    $st = $this->db->prepare('SELECT * FROM contacts ORDER BY id LIMIT :current_page, :record_per_page');

    // Get the page via GET request (URL param: page), if non exists default the page to 1
    $page_no = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

    // Number of records to show on each page
    $records_per_page = 5;

    $st->bindValue(':current_page', ($page_no - 1) * $records_per_page, PDO::PARAM_INT);
    $st->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
    $st->execute();

    $num_contacts = $this->db->query('SELECT COUNT(*) FROM contacts')->fetchColumn();


    $contacts = $st->fetchAll();

    //All the data that has to be return from this functon is added to an associative array
    $pageData = [
      'page_no' => $page_no,
      'records_per_page' => $records_per_page,
      'contacts' => $contacts,
      'num_contacts' => $num_contacts

    ];


    return ($pageData);
  }

  public function get_images_display()
  {
    $st = $this->db->prepare('SELECT * FROM images ORDER BY uploaded_date DESC');
    $st->execute();
    $images = $st->fetchAll();

    $pageData = [

      'images' => $images
    ];

    return ($pageData);
  }

  public function run_mediaUpload()
  {
    $msg = '';
    // Check if user has uploaded new image
    if (isset($_FILES['image'], $_POST['title'], $_POST['description'])) {
      // The folder where the images will be stored

      $target_dir = 'images/';
      // The path of the new uploaded image
      $image_path = $target_dir . basename($_FILES['image']['name']);
      // Check to make sure the image is valid
      if (!empty($_FILES['image']['tmp_name']) && getimagesize($_FILES['image']['tmp_name'])) {
        if (file_exists($image_path)) {
          $msg = 'Image already exists, please choose another or rename that image.';
          return ($msg);
        } else if ($_FILES['image']['size'] > 500000) {
          $msg = 'Image file size too large, please choose an image less than 500kb.';
          return ($msg);
        } else {
          // Everything checks out now we can move the uploaded image
          move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

          // Insert image info into the database (title, description, image path, and date added)
          $stmt = $this->db->prepare('INSERT INTO images VALUES (NULL, ?, ?, ?, CURRENT_TIMESTAMP)');
          $stmt->execute([$_POST['title'], $_POST['description'], $image_path]);

          $msg = 'Image uploaded successfully!';
          return ($msg);
        }
      } else {
        $msg = 'Please upload an image!';
        return ($msg);
      }
    }
  }
}
