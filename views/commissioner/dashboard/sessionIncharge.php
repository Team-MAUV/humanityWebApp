
<?php $page = 'sessionIncharge';
$title = 'Session Incharge';
$style = 'com-dash-sessionIncharge.css';
$jsFile = 'com-dash-sessionIncharge';
include "com-dash-header.php"; ?>




<div class="grid-container">

  <div class="content update">
    <h2>Appoint a Session Incharge</h2>
    <div class="message"><?php echo $msg; ?>
    
    <form action="sessionIncharge?gen=1" method="post">
    <label for="venue">Volunteer Activity Id</label>
    <div class="select"> 
        <select name="vol-id" id="vol-id" required>
          <option selected="selected" placeholder="Select event Id"></option>
          <?php


          // Iterating through the product array
          foreach ($volactivity_info as $item) {
            echo '<option value="' . strtolower($item['activity_id']) . '">' . $item['activity_id'] . '</option>';
          }
          ?>
        </select>
        
      </div>
    
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
      <label for="pcode">Passcode</label>
      <input type="text" name="pcode" id="pcode" value="<?php echo $pwd; ?>" required>
   

      <input type="submit" value="Appoint">   </div>
    </form>


    <div class="content read" id="sessionIncharge_data">


              <table>
                        <thead>
                        <tr>
                        <td>#</td>
                        <td>Session Incharge ID</td>
                        <td>Name</td>
                        <td>Volunteer Activity</td>
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
                              <td><?= $tmp['name'] ?></td>
                              <td><?= $tmp['vol_activity'] ?></td>
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

