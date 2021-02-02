<?php $page = 'home';
include "buyer_header.php"; ?>
<!Doctype html>
<html>

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Home</title>
    <link rel="stylesheet" href="<?= URL ?>public/css/buy-pages.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/buyer_dash_home.css" />
    <link rel="stylesheet" href="<?= URL ?>public/css/buyer_dash_index.css" />


    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
<div class="errordiv" style="margin: 300px;">
    <p><?= $bidmsg ?></p>
</div>
<a href="<?= URL?>buyer/index"><button type="button" >
        Back to the market
            </button></a> 
</body> 
<?php include "buyer_footer.php" ?>

</html>