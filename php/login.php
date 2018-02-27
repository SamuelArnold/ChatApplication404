<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

//Retrieve the passed values
$username1 = $_POST['username'];
$password1 = $_POST['password'];

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
//echo "<br>".$usernamefound."<br>";
//echo $passwordmatch."<br>";

if($usernamefound == true && $passwordmatch == true)
{
// Set the session data:
        session_start();
        $_SESSION['username'] = $username1;

    // Redirect:
        header( 'Location: ../index.html' ) ;

} //end if

else
{
    ///echo "Authentication failed.";
    if ($usernamefound == false)
    {
         //echo "Username not found.";
    } //end if

    else
    {
         //echo "Password doesn't match records.";
    } //end else

    // Redirect:
    header( 'url: login.html' ) ;
    
} //end else


?>
