<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$hostname ="localhost";
$username ="root";
$password ="";
$dbname ="chippy";



 
 
$con = mysqli_connect("localhost", "root", "", "chippy")or die ("cannot connect");
 // Check connection
 if (mysqli_connect_errno())
 {
echo "failed to connect to MYSQL: " .mysqli_connect_error();
 }
 
?>