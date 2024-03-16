<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spark_bank"; // Update this line to use the correct database name

$port = "3307"; // specify the port if it's not the default port

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die("Could not connect to the database due to the error --> " . mysqli_connect_error());
}

?>
