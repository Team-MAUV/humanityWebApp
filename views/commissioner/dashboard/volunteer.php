<?php $page = 'home';
$title = 'Volunteer Profiles';
$style = 'com-dash-profiles-volunteer.css';

$jsFile = 'tab-changing';
include "com-dash-header.php"; ?>


<div id="breadcrum">

<!DOCTYPE html>
<html>
<head>
<title>volunteer Profile</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

</head>
<body>




<div class="grid-container">



  <div class="grid-body">

    <div class="pageTitle">
      <h1>Volunteer Profiles</h1>
    </div>

    <div class="tab-section">
      <ul>
        <li><a id="tab1" href="?registered" class="active">Registered </a></li>
        <li><a id="tab2" href="#"> New Requests <span>(<?php echo $newReq_Count ?>) </span></a></li>
     
          
        
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
    
              <td>Email</td>
              <td>Points</td>
          
             
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
                    <td><?= $contact['email'] ?></td>
                    <td><?= $contact['vol_points'] ?></td>
                   
                 
               
     
                <td class="actions">
                <form action="delete_volunteer" method="POST">
  
                  <input type="hidden" id="id" name="id" value = "<?= $contact['id'] ?>" required><br><br>
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
              <td>Email</td>
              <td></td>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($newReq as $req) : ?>
              <tr>
                 
                <td><?= $req['join_date'] ?></td>
                <td><?= $req['name'] ?></td>
                <td><?= $req['email'] ?></td>
             
                <td class="actions">
                <a href="update.php?id=<?= $req['id'] ?>" class="edit" download="#"><i class="fa fa-download"></i>View Application</i></a>
                  <a href="run_accept_vol_request?id=<?= $req['id'] ?>" class="edit">Accept</i></a>
                  
                  <button type="button" class="readmore">Decline</button>
                  <div class="view" id="view">
                  <form action="run_reject_vol_request" method="POST" id="form">
                  
                  <input type="hidden" id="vol_id" name="vol_id" value="<?= $req['id'] ?>">
                  <input type="text" name="reason" id="reason" placeholder="Reason" >
                  <button type="submit">Submit </button>
               </div>
               </form>
                 
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <h2>Removed Volunteers</h2>
        <table>
          <thead>
            <tr>
              <td>Volunteer Id</td>
              <td>Name</td>
              <td>Email</td>
             
              <td>Address</td>
              <td>Remark</td>
              <td></td>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($exvol as $vol) : ?>
              <tr>
                 
                <td><?= $vol['vol_id'] ?></td>
                <td><?= $vol['name'] ?></td>
                <td><?= $vol['email'] ?></td>
               
                <td><?= $vol['address'] ?></td>
                <td><?= $vol['remove_reson'] ?></td>
             
                
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

      </div>    
    </div>
    <script src="<?= URL ?>public/js/com-dash-beneficiaryCases.js"></script>
  </div>

  <?php include "com-dash-footer.php" ?>