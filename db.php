<?php
$hostname ="localhost";
$username ="root";
$password ="";
$dbname ="chippy";



 
 
$con = mysql_connect($hostname, $username, $password)or die ("cannot connect");
 // Check connection
 $result = mysql_select_db($dbname, $con) or die ("canot select db");
 
?>