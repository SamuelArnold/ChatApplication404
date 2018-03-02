<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

//Code found at:
//http://mark-merry.com/CSIS316/ProjectsClass/Project6/createrecord.php
//http://mark-merry.com/CSIS316/ProjectsClass/Project6/createrecord.txt

// Create connection
require 'config.php';

// define variables and set to empty values
$nameErr = $passErr = $pass1Err = $pass2Err = "";

//check if name is empty
if (empty($_POST["username"])) 
    $nameErr = "Name is required";

// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z0-9 ]*$/",($_POST["username"]))) 
    $nameErr = "Only letters, numbers and white space allowed.";


//check if password is empty
if (empty($_POST["pass1"])) 
    $pass1Err = "Password is required"; 

//check if password confirmation is empty
if (empty($_POST["pass2"])) 
    $pass2Err = "Password confirmation is required";

//check if passwords match
if ($_POST["pass1"] != $_POST["pass2"])
    $pass2Err = "Password confirmation is required";

//verify input integrity
if ($nameErr == "" && $emailErr == "" && $genderErr == "" && $websiteErr == "")
{
    $sql_query = "INSERT INTO `users` (`username`, `password`) VALUES ($_POST['username'], $_POST['password'])";
    mysqli_query($conn,$sql_query);
}

?>



