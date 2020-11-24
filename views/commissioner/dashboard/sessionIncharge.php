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
      <label for="tmp_username">Temporary Username</label>
      <input type="text" name="tmp_username" id="tmp_username">
      <label for="p_count">Passcode</label>
      <input type="text" name="p_count" id="p_count">
      <button>Generate Password</button>

      <input type="submit" value="Appoint">

    </form>
    <div class="sessionIncharge_table" id="sessionIncharge_data">

    <table>
      <thead>
        <tr>
              <td>#</td>
              <td>Session Incharge ID</td>
              <td>Staff ID</td>
              <td>Session Start Time</td>
              <td>Status</td>
              <td>Session Closed Time</td>
              <td></td>
        </tr>
       </thead>
              <tbody>

                <?php foreach ($contacts as $contact) : ?>
                  <tr>
                    <td><?= $contact['id'] ?></td>
                    <td><?= $contact['vol_id'] ?></td>
                    <td><?= $contact['name'] ?></td>
                    <td><?= $contact['level'] ?></td>
                    <td><?= $contact['vol_points'] ?></td>
                    <td><?= $contact['join_date'] ?></td>
                    <td class="actions">
                      <a href="update.php?id=<?= $contact['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                      <a href="delete.php?id=<?= $contact['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
      </div>


  </div>


  <?php include "com-dash-footer.php" ?>

  <script>  
$(document).ready(function(){  

    load_data();
    
    function load_data()
    {
        $.ajax({
            url:"fetch_sessionIncharge_details",
            method:"POST",
            success:function(data)
            {
                $('#sessionIncharge_data').html(data);
            }
        });
    }
    
  });  
</script>