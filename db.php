<?php

$servername = "10.103.77.39";
$username = "root";
$password = "Sabc123*";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
