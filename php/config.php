<?php
//info for connecting to db
$servername = "mysql3.hostica.com";
$username = "Mdgeise_user";
$password = "L1b3rty_W4y";
$dbname = "Mdgeise_CSIS316";

// Create connection	
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>