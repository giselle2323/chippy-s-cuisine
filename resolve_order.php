<!DOCTYPE html>
<html>
<head>
	<title>RESOLVE ORDER PAGE</title>
	<style>
		body{
        font-size: 40px;
        background-color: #000000;
        color: green;
        text-align: center;
			
		}
		a{
    display: block;
    color: white;
  }
	</style>
</head>
<body>
<header>WELCOME ADMIN</header>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require 'db.php';
$id = $_GET['id'];

$sql = "UPDATE orders SET status ='delivered' WHERE id=$id";

if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($con);
}


mysqli_close($con);
?>
<a href="order.php">GO BACK TO ORDER PAGE</a>
<br>
<a href="index.php">GO BACK TO THE HOME PAGE</a>
</body>
</html>