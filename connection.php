<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms2";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($mysqli) {
    // echo "Connection Successful";
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
