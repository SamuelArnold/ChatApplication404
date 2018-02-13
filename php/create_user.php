<?php
echo 'A'."<br/>";
error_reporting(E_ALL);
ini_set('display_errors',1);

//Code found at:
// http://mark-merry.com/CSIS316/ProjectsClass/Project6/updaterecord.php
// http://mark-merry.com/CSIS316/ProjectsClass/Project6/updaterecord.txt


// Create connection
require 'config.php';

//The next two lines perform an SQL instruction to change record whose id=1 
//so that the age is 46 (previously it was 45)
$sql_query = "UPDATE `students` SET `age` = '46' WHERE `students`.`id` = 1";
mysqli_query($conn,$sql_query);
echo 'Record Updated';
?>
