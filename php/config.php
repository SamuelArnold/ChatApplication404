<?php
//info for connecting to db
$servername = "mysql3.hostica.com";
$username = "Mdgeise_CSIS316";
$password = "CSIS316A";
$dbname = "Mdgeise_CSIS316";

// Create connection	
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>