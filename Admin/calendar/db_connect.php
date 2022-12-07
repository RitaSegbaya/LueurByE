<?php
/* Database connection start */
$servername = "us-cdbr-east-06.cleardb.net";
$username = "heroku_fc8d8b3866721b8";
$password = "f3f3b2a9";
$dbname = "b0cb6e975851da";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>