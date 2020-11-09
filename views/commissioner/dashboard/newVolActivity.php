<?php $page = 'volunteerActivity';
$title = 'Volunteer Activity';
$style = 'com-dash-newVolActivity.css';
include "com-dash-header.php"; ?>


<div class="grid-container">

  <div class="content update">
    <h2>Create New Volunteer Activity</h2>
    <form action="create.php" method="post">
      <label for="id">ID</label>
      <label for="name">Activity Name</label>
      <input type="text" name="id" placeholder="26" value="auto" id="id">
      <input type="text" name="name" placeholder="John Doe" id="name">
      <label for="email">Email</label>
      <label for="phone">Phone</label>
      <input type="text" name="email" placeholder="johndoe@example.com" id="email">
      <input type="text" name="phone" placeholder="2025550143" id="phone">
      <label for="title">Title</label>
      <label for="created">Created</label>
      <input type="text" name="title" placeholder="Employee" id="title">
      <input type="datetime-local" name="created" value="<?= date('Y-m-d\TH:i') ?>" id="created">
      <input type="submit" value="Create">
    </form>



  </div>


  <?php include "com-dash-footer.php" ?>