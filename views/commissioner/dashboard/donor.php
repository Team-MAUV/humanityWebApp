
<?php $page = 'profiles';
$title = 'Donor Profiles';
$style = 'com-dash-profiles-donor.css';
$style = 'com-dash-profiles-volunteer.css';
include "com-dash-header.php"; ?>

<div class="grid-container">

<div class="grid-body">

    <div class="pageTitle">
      <h1>Donor Profiles</h1>
    </div>

    <div class="tab-section">
      <ul>
        <li><a id="tab1" href="?registered" class="active">Registered </a></li>
        
          
        
      </ul>


      <hr>
    </div>

    <div id="tab1C" class="tab-container">
  
          <div class="content read">
          
       
            <table>
              <thead>
              <tr>
              <td>#</td>
              <td>Donor ID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Contact</td>
              <td>NIC</td>
              <td>Total Contribution</td>
              <td></td>
            </tr>
              </thead>
              <tbody>

                <?php foreach ($dcontacts as $dcontact) : ?>
                  <tr>
                  <td><?= $dcontact['id'] ?></td>
                    <td><?= $dcontact['don_id'] ?></td>
                    <td><?= $dcontact['name'] ?></td>
                    <td><?= $dcontact['email'] ?></td>
                    <td><?= $dcontact['contact'] ?></td>
                    <td><?= $dcontact['nic'] ?></td>
                    <td><?= $dcontact['contribution'] ?></td>
                    <td class="actions">
                    <form action="delete_donor" method="POST">
  
                        <input type="hidden" id="id" name="id" value = "<?= $dcontact['id'] ?>" required><br><br>
                        <label for="lname">Remark:</label>
                        <input type="text" id="remark" name="remark" required><br><br>
                        <button type="submit" value="Submit"><i class="fas fa-trash fa-xs"></i>Remove</button>
                      </form>
                      
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


            <div class="pagination">
              <?php if ($dpage_no > 1) : ?>
                <a href="donor?page=<?= $dpage_no - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
              <?php endif; ?>
              <?php if ($dpage_no * $records_per_page < $dnum_contacts) : ?>
                <a href="donor?page=<?= $dpage_no + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
              <?php endif; ?>

           
            </div>
            <h2>Removed Donor </h2>
        <table>
          <thead>
            <tr>
              <td>Donor Id</td>
              <td>Name</td>
              <td>Email</td>
              <td>Contact</td>
              <td>Com Id</td>
              <td>Remark</td>
              <td></td>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($rdon as $don) : ?>
              <tr>
                 
                <td><?= $don['don_id'] ?></td>
                <td><?= $don['name'] ?></td>
                <td><?= $don['email'] ?></td>
                <td><?= $don['contact'] ?></td>
                <td><?= $don['del_com'] ?></td>
                <td><?= $don['remove_reson'] ?></td>
             
                
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
          </div>


    </div>

    

  </div>



</div>


<?php include "com-dash-footer.php" ?>