
<?php $page = 'profiles';
$title = 'Buyer Profile';
$style = 'com-dash-buyer.css';
$jsFile = 'tab-changing';
$style = 'com-dash-profiles-volunteer.css';
include "com-dash-header.php"; ?>


<div class="grid-container">

<div class="grid-body">

    <div class="pageTitle">
      <h1>Buyer Profiles</h1>
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
          <form action="search_buyer" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
          </div>
            <table>
              <thead>
              <tr>
              <td>#</td>
              <td>Buyer ID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Contact</td>
              <td>NIC</td>
              <td></td>
            </tr>
              </thead>
              <tbody>

                <?php foreach ($bcontacts as $bcontact) : ?>
                  <tr>
                    <td><?= $bcontact['id'] ?></td>
                    <td><?= $bcontact['buy_id'] ?></td>
                    <td><?= $bcontact['name'] ?></td>
                    <td><?= $bcontact['email'] ?></td>
                    <td><?= $bcontact['contact'] ?></td>
                    <td><?= $bcontact['nic'] ?></td>
                    <td class="actions">
                      <a href="update.php?id=<?= $bcontact['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                      <a href="delete.php?id=<?= $bcontact['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>


            <div class="pagination">
              <?php if ($bpage_no > 1) : ?>
                <a href="buyer?page=<?= $bpage_no - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
              <?php endif; ?>
              <?php if ($bpage_no * $records_per_page < $bnum_contacts) : ?>
                <a href="buyer?page=<?= $bpage_no + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
              <?php endif; ?>

           
            </div>
          </div>


    </div>

    

  </div>



</div>


<?php include "com-dash-footer.php" ?>