<?php $page = 'home';
$title = 'Volunteer Profiles';
$style = 'com-dash-profiles-volunteer.css';
$jsFile = 'tab-changing';
include "com-dash-header.php"; ?>

<div class="grid-container">



  <div class="grid-body">

    <div class="pageTitle">
      <h1>Volunteer Profiles</h1>
    </div>

    <div class="tab-section">
      <ul>
        <li><a id="tab1" href="#" class="active">Registered</a></li>
        <li><a id="tab2" href="#"> New Requests</a></li>
        <div class="search-container">
          <form action="search_volunteer" method="POST">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </ul>


      <hr>
    </div>


    <div id="tab1C" class="tab-container">

          <div class="content read">

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


            <div class="pagination">
              <?php if ($page_no > 1) : ?>
                <a href="volunteer?page=<?= $page_no - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
              <?php endif; ?>
              <?php if ($page_no * $records_per_page < $num_contacts) : ?>
                <a href="volunteer?page=<?= $page_no + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
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
              <td>Joined Date</td>
              <td></td>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($newReq as $req) : ?>
              <tr>
                 
                <td><?= $req['join_date'] ?></td>
                <td><?= $req['vol_id'] ?></td>
                <td><?= $req['name'] ?></td>
             
                <td class="actions">
                  <a href="update.php?id=<?= $req['id'] ?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                  <a href="delete.php?id=<?= $req['id'] ?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

       
      </div>    
    </div>

  </div>

  <?php include "com-dash-footer.php" ?>