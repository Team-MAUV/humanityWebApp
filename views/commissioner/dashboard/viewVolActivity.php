<?php $page = 'volunteerActivity';
include "com_dash_header.php"; ?>

<?php $page = 'volunteerActivity';
$title = 'Volunteer Activity';
$style = 'com-dash-volunteerActivity.css';
include "com-dash-header.php"; ?>


<div class="grid-container">

  <div class="content update">
    <h2>Volunteer Activity</h2>
    <form action="create.php" method="post">
      <label for="id">ID</label>
      <label for="name">Activity Name</label>
      <input type="text" name="id" placeholder="26" value="auto" id="id">
      <input type="text" name="name" placeholder="Blood Donation" id="name">
      <label for="venue">Venue</label>
      <label for="p_count">Expected Participant Count</label>
      <input type="text" name="venue" id="venue">
      <input type="text" name="p_count" id="p_count">
      <label for="start_time">Starting Date & Time</label>
      <label for="end_time">Ending Date & Time</label>
      <input type="datetime-local" name="created" value="<?= date('Y-m-d\TH:i') ?>" id="start_time">
      <input type="datetime-local" name="created" value="<?= date('Y-m-d\TH:i') ?>" id="end_time">
      <input type="submit" value="Update">
      <input type="submit" value="Delete">
    </form>



  </div>



  <?php include "com-dash-footer.php" ?>