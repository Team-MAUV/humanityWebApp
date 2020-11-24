


<?php $page = 'sessionIncharge';
$title = 'Session Incharge';
$style = 'com-dash-sessionIncharge.css';
$jsFile = 'com-dash-sessionIncharge';
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
    <div class="content read" id="sessionIncharge_data">

    <?php echo $str ;?>
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

                          <?php foreach ($result as $tmp) : ?>
                            <tr>
                              <td><?= $tmp['id'] ?></td>
                              <td><?= $tmp['incharge_id'] ?></td>
                              <td><?= $tmp['staff_id'] ?></td>
                              <td><?= $tmp['session_start_time'] ?></td>
                              <td><?= $tmp['status'] ?></td>
                              <td><?= $tmp['session_closed_time'] ?></td>
                          
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                </table>
 
  </div>

</div>
       

</body>
</html>






  <?php include "com-dash-footer.php" ?>

