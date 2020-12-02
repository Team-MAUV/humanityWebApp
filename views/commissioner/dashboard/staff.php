<?php $page = 'profiles';
$title = 'Staff Profiles';
$style = 'com-dash-staff.css';
$jsFile = 'tab-changing';
$style = 'com-dash-profiles-volunteer.css';
include "com-dash-header.php"; ?>

<div class="grid-container">

<div class="grid-body">

    <div class="pageTitle">
      <h1>Staff Profiles</h1>
    </div>

    <div class="tab-section">
      <ul>
        <li><a id="tab1" href="?registered" class="active">Registered </a></li>
        <li><a id="tab2" href="#"> New Requests <span>(<?php echo $snewReq_Count ?>) </span></a></li>
     
          
        
      </ul>


      <hr>
    </div>


    <div id="tab1C" class="tab-container">
  
          <div class="content read">
          
        <div class="search-container">
          <form action="search_volunteer" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
          </div>
            <table>
              <thead>
              <tr>
              <td>#</td>
              <td>Volunteer ID</td>
              <td>Name</td>
              <td>Volunteer Level</td>
              <td>Points</td>
              <td>Joined Date</td>
              <td></td>
            </tr>
              </thead>
              <tbody>

                <?php foreach ($scontacts as $scontact) : ?>
                  <tr>
                    <td><?= $scontact['id'] ?></td>
                    <td><?= $scontact['staff_id'] ?></td>
                    <td><?= $scontact['name'] ?></td>
                    <td><?= $scontact['email'] ?></td>
                    <td><?= $scontact['address'] ?></td>
                    <td><?= $scontact['joined_year'] ?></td>
                    <td class="actions">
                      <a href="update.php?id=<?= $scontact['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                      <a href="delete.php?id=<?= $scontact['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


            <div class="pagination">
              <?php if ($spage_no > 1) : ?>
                <a href="staff?page=<?= $spage_no - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
              <?php endif; ?>
              <?php if ($spage_no * $records_per_page < $snum_contacts) : ?>
                <a href="staff?page=<?= $spage_no + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
              <?php endif; ?>

           
            </div>
          </div>


    </div>

    <div id="tab2C" class="tab-container">
      <div class="content read">

        <table>
          <thead>
            <tr>
              <td>Requested On</td>
              <td>Name</td>
              <td>Email</td>
              <td></td>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($snewReq as $sreq) : ?>
              <tr>
                 
                <td><?= $sreq['joined_year'] ?></td>
                <td><?= $sreq['name'] ?></td>
                <td><?= $sreq['email'] ?></td>
             
                <td class="actions">
                <a href="update.php?id=<?= $sreq['id'] ?>" class="edit">View Profile</i></a>
                  <a href="run_accept_staff_request?id=<?= $sreq['id'] ?>" class="edit">Accept</i></a>
                  
                  <a href="update.php?id=<?= $sreq['id'] ?>" class="edit">Decline</i></a>
                 
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

       
      </div>    
    </div>

  </div>

</div>


<?php include "com-dash-footer.php" ?>