<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Volunteer Registration</title>
    <link rel="stylesheet" href="<?= URL ?>public/css/vol-register-page-style.css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>



    <div class="content update">
        <h2>Create Contact</h2>
        <form action="register/register_vol" method="post">
            <label for="id">ID</label>
            <label for="name">Name</label>
            <input type="text" name="id" placeholder="26" value="auto" id="id">
            <input type="text" name="name" placeholder="John Doe" id="name">
            <label for="email">Email</label>
            <label for="phone">Phone</label>
            <input type="text" name="email" placeholder="johndoe@example.com" id="email">
            <input type="text" name="phone" placeholder="2025550143" id="phone">
            <label for="title">Title</label>
            <label for="created">Created</label>
            <input type="text" name="title" placeholder="Employee" id="title">
            <input type="datetime-local" name="created" value="<?= date('Y-m-d\TH:i') ?>" id="created">
            <input type="submit" value="Create">
        </form>

    </div>


</body>

</html>