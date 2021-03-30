
<?php $page = 'profiles';
$title = 'Buyer Profile';
$style = 'com-dash-buyer.css';
$jsFile = 'tab-changing';
$style = 'com-dash-profiles-volunteer.css';
include "com-dash-header.php"; ?>

<div class="grid-container">
<<div id="breadcrum">

<!DOCTYPE html>
<html>
<head>
<title>Saff Profile</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>


<body>
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
              <td>Bids Won </td>
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
                    <td>      <button type="button" class="readmore"> 5 </button>
                <div class="view" id="view">
               
                <p> Plastic- 50kg-20.11.2020 </p>
                <p>Papers-100kg-11.05.2020 </p>
                <p>Ewaste-20kg-20.01.2020 </p>
                
                </div>  </td>

      </div>







                    <td class="actions">
                    <form action="delete_buyer" method="POST">
  
                        <input type="hidden" id="id" name="id" value = "<?= $bcontact['id'] ?>" required><br><br>
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
              <?php if ($bpage_no > 1) : ?>
                <a href="buyer?page=<?= $bpage_no - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
              <?php endif; ?>
              <?php if ($bpage_no * $records_per_page < $bnum_contacts) : ?>
                <a href="buyer?page=<?= $bpage_no + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
              <?php endif; ?>

           
            </div>
            <h2>Removed Buyers </h2>
        <table>
          <thead>
            <tr>
              <td>Buyer Id</td>
              <td>Name</td>
              <td>Email</td>
              <td>Contact</td>
              <td>Com Id</td>
              <td>Remark</td>
              <td></td>
            </tr>
          </thead>
          <tbody>

            <?php foreach ($rbuy as $buy) : ?>
              <tr>
                 
                <td><?= $buy['buy_id'] ?></td>
                <td><?= $buy['name'] ?></td>
                <td><?= $buy['email'] ?></td>
                <td><?= $buy['contact'] ?></td>
                <td><?= $buy['del_com'] ?></td>
                <td><?= $buy['remove_reson'] ?></td>
             
                
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
          </div>
          

    </div>
    
    
    

  </div>


  <script src="<?= URL ?>public/js/com-dash-beneficiaryCases.js"></script>
</div>
</body>

<?php include "com-dash-footer.php" ?>