<!Doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>volunteer template</title>
    <link rel="stylesheet" href="http://localhost/humanity/public/css/vol-template.css" />

    <link rel="stylesheet" type="text/css" href="http://localhost/humanity/public/css/vol-header.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/humanity/public/css/vol-footer.css" />
    <script src="https://kit.fontawesome.com/c0d2632e91.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>


<body>


    <div class="vtgrid">
        <div class="vheader">
            <iframe src="http://localhost/humanity/views/volunteer/vheader.php" width="100%" height="100%" scrolling="no"></iframe>
        </div>
        <div class="vcontent">
            <iframe src="<?= URL ?>views/volunteer/vsidebar-addbeneficiery.php" width="100%" height="100%" scrolling="no"></iframe>
            <iframe src="http://localhost/humanity/views/volunteer/add-new-beneficiery.php" width="100%" height="100%"></iframe>
        </div>

        <div class="vfooter">
            <iframe src="http://localhost/humanity/views/volunteer/vfooter.php" width="100%" height="100%" scrolling="no"></iframe>
        </div>
    </div>
</body>

</html>