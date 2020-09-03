<?php
$servername = "localhost";
$database = "rchat";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection

if (!$conn) {
die("error " . mysqli_connect_error());
}

session_start();




?>