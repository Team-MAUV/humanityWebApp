


<?php $page = 'sessionIncharge';
$title = 'Session Incharge';
$style = 'com-dash-sessionIncharge.css';
$jsFile = 'com-dash-sessionIncharge';
include "com-dash-header.php"; ?>




<div class="grid-container">

  <div class="content update">
    <h2>Appoint a Session Incharge</h2>
    <form action="sessionIncharge?gen=1" method="post">
      <label for="venue">Select Staff ID</label>
      <div class="select"> 
        <select name="staff-id" id="staff-id" required>
          <option selected="selected" placeholder="Select staff Id"></option>
          <?php


          // Iterating through the product array
          foreach ($staff_info as $item) {
            echo '<option value="' . strtolower($item['staff_id']) . '">' . $item['staff_id'] . '</option>';
          }
          ?>
        </select>
      </div>
      <br>
      <h3>Generate Session Incharge Credentials </h3>
      <input type="submit" name="generateName" value="Generate">
    </form>

    <form action="sessionIncharge?gen=2" method="post">
      <label for="tmp_username">Temporary Username</label>
      <input type="text" name="tmp_username" id="tmp_username" value="<?php echo $tempUsername; ?>" required>
      <input type="hidden" name="staff_id" id="staff_id" value="<?php echo $stf_id; ?>" required>
      <input type="hidden" name="id_in_stf_tbl" id="id_in_stf_tbl" value="<?php echo $str_stf_id; ?>" required>
      <label for="pcode">Passcode</label>
      <input type="text" name="pcode" id="pcode" value="<?php echo $pwd; ?>" required>
   

      <input type="submit" value="Appoint">
    </form>

    <div class="message"><?php echo $msg; ?> </div>
    <div class="content read" id="sessionIncharge_data">


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
                              <td><?= $tmp['id_in_stf_tbl'] ?></td>
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

