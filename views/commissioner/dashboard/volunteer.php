<?php $page = 'home';
$title = 'Volunteer Profiles';
$style = 'com-dash-profiles-volunteer.css';
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
        <li><a id="tab3" href="#"> Rejected</a></li>
      </ul>
      <hr>
    </div>

    <div id="tab1C" class="tab-container">
      <div class="content read">

        <table>
          <thead>
            <tr>
              <td>#</td>
              <td>Name</td>
              <td>Email</td>
              <td>Phone</td>
              <td>Title</td>
              <td>Created</td>
              <td></td>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($contacts as $contact) : ?>
              <tr>
                <td><?= $contact['id'] ?></td>
                <td><?= $contact['name'] ?></td>
                <td><?= $contact['email'] ?></td>
                <td><?= $contact['phone'] ?></td>
                <td><?= $contact['title'] ?></td>
                <td><?= $contact['created'] ?></td>
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

      <div id="tab2C" class="tab-container">
        <h2>Tab2</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore officia officiis ullam nulla nam ipsam, consectetur iusto quos ipsa assumenda dolorum neque molestiae perferendis repudiandae, itaque repellat, labore necessitatibus pariatur rerum odio non hic. Quisquam ipsa quasi nihil accusantium, itaque molestias cupiditate consequatur obcaecati aspernatur ipsam, neque corrupti doloremque molestiae tempora explicabo ea iste.</p>
      </div>


      <div id="tab3C" class="tab-container">
        <h2>Tab3</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, sapiente ipsa! Beatae, repellat, excepturi animi tempore possimus quia culpa tempora fuga atque aspernatur quaerat, esse eveniet aperiam eligendi non expedita cumque totam doloremque repellendus pariatur ullam deserunt facilis ipsam sapiente. Tempore, a omnis!</p>
      </div>

    </div>

  </div>

  <?php include "com-dash-footer.php" ?>