<?PHP
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'partials/_dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // 
    // Check existing user
    $existSQL = "SELECT * FROM `users` WHERE username = '$username';";
    $result = mysqli_query($conn, $existSQL);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        // $exists = true;
        $showError = "Username already exists.";
    } else {
        // $exists = false;

        if (($password == $cpassword)) {
            // Using password hash to make password secure
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Password to not match.";
        }
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <?PHP require 'partials/_head.php'; ?>
    <title>iSecure : Sign Up</title>
</head>

<body>
    <?php require 'partials/_nav.php'; ?>
    <?PHP
    if ($showAlert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created & you can login. 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Unable to Signup!</strong> Your account is not created becuase ' . $showError . ' 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    ?>
    <div class="container">

        <h1 class="text-center mt-3">Sign Up to iSecure</h1>

        <!-- Signup Form -->

        <form action="/iSecure/signup.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" maxlength="40" class="form-control" id="username" name="username" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Your Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <div id="emailHelp" class="form-text">Make sure to type the same password as above</div>
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>


    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>