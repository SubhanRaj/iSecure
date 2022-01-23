<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>iSecure : Welcome</title>
</head>

<body>
    <?php require 'partials/_nav.php'; ?>
    <div class="container">
        <div class="alert alert-success mt-3 " role="alert">
            <h2 class="alert-heading text-center">Welcome <?PHP echo $_SESSION['username'] ?></h2>
            <p class="text-center">Hey How are you? Welcome to iSecure, you're logged in as <?PHP echo $_SESSION['username'] ?><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, architecto molestias corrupti laborum vel corporis reiciendis mollitia illum eius eveniet enim nesciunt dolor asperiores eligendi odio quis nobis perspiciatis magnam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, alias?
            </p>
            <hr>
            <p class="mb-0">Whenever you need to, you can logout using this link. <a href="/iSecure/logout.php">Log Out</a></p>
        </div>
    </div>



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>