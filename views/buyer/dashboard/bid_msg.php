<?php $page = 'home';
include "buyer_header.php"; 
$style = 'buy-pages.css'?>
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
<style>
.errormsg {
    margin: 300px;
    align-items:center;
}
p {
    font-size: 40px;
    font-color: green;
}

button {
    background-color: #254d35;
    color:white;
    font-size:20px;
}
button :hover{
    background-color: green;
}

</style>
</head>
<body>
<div class="errormsg"> 
    <p class = "bidmsg"><?= $bidmsg ?></p>
    <a href="<?= URL?>buyer/index"><button type="button" class = "btn">
        Back to the market
            </button></a> 
   
</div>
</body> 
<?php include "buyer_footer.php" ?>

</html>