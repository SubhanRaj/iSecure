<?PHP

$servername = "localhost";
$username = "root";
$password = "";
$database = "iSecure";

// Connecting to the database

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}


?>