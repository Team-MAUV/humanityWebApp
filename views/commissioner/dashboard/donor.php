
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
          
        <div class="search-container">
          <form action="search_donor" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
          </div>
            <table>
              <thead>
              <tr>
              <td>#</td>
              <td>Donor ID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Contact</td>
              <td>NIC</td>
              <td>Total Contricution</td>
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
                      <a href="update.php?id=<?= $dcontact['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                      <a href="delete.php?id=<?= $dcontact['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
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
          </div>


    </div>

    

  </div>



</div>


<?php include "com-dash-footer.php" ?>