<?php
$servername = "localhost";
$username = "simplybiz_admin";
$password = "K@rthiadmin3";
$dbname = "simplybiz_database";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
