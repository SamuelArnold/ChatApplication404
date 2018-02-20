<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

//Retrieve the passed values
$username1 = $_POST['username'];
$password1 = $_POST['password'];

//Test that values are being passed
//USED FOR TESTING ONLY. HAVE DISABLED FOR NORMAL FUNCTION.
//echo "username1: ".$username1."<br>";
//echo "password1: ".$password1."<br>";


//Variables to test if records are found / if records match
$usernamefound = false;
$passwordmatch = false;


// Create connection
require 'config.php';

$sql_query = "SELECT * FROM `users` ;";
$result= mysqli_query($conn,$sql_query);

while ($row = $result->fetch_array(MYSQLI_BOTH)) 
{
    if($username1 == $row[1])
    {
        //echo $row[0];
        $usernamefound = true;

        if($password1 == $row[2])
        {
          //echo $row[2];
          $passwordmatch = true;
        } //end if

    } //end if
} //end while

//verify username is found and password matches
echo "<br>".$usernamefound."<br>";
echo $passwordmatch."<br>";

if($usernamefound == true && $passwordmatch == true)
{
    echo "User authenticated. Logging in.";

    //redirect to chat screen
    sleep(3);
    echo "<script> location.href='index-test.html'; </script>";
    exit();
} //end if

else
{
    echo "Authentication failed.";
    if ($usernamefound == false)
    {
        echo "Username not found.";
    } //end if

    else
    {
        echo "Password doesn't match records.";
    } //end else

} //end else


?>
