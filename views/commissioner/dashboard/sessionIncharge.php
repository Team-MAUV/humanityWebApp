<?php $page = 'sessionIncharge';
$title = 'Session Incharge';
$style = 'com-dash-sessionIncharge.css';
include "com-dash-header.php"; ?>


<div class="grid-container">

  <div class="content update">
    <h2>Appoint a Session Incharge</h2>
    <form action="create.php" method="post">
      <label for="venue">Select Staff ID</label>
      <div class="select"> <select name="staff-id">
          <option selected="selected">Choose one</option>
          <?php
          // A sample product array
          $products = array("Mobile", "Laptop", "Tablet", "Camera");

          // Iterating through the product array
          foreach ($products as $item) {
            echo '<option value="' . strtolower($item) . '">' . $item . '</option>';
          }
          ?>
        </select></div>
      <br>
      <h3>Enter Session Incharge Credentials </h3>
      <label for="tmp_username">Session Incharge Temporary Username</label>
      <input type="text" name="tmp_username" id="tmp_username">
      <label for="p_count">Expected Participant Count</label>
      <input type="text" name="p_count" id="p_count">

      <input type="submit" value="Appoint">

    </form>



  </div>


  <?php include "com-dash-footer.php" ?>