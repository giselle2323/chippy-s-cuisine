<!DOCTYPE html>
<html>
<head>
	<title>RESOLVE ORDER PAGE</title>
	<style>
		body{
        font-size: 70px;
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
require 'db.php';
$id = $_GET['id'];

$sql = "UPDATE orders SET status ='delivered' WHERE id=$id";
$result = mysql_query($sql, $con);

if ($result === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

mysql_close($con);
?>
<a href="order.php">GO BACK TO ORDER PAGE</a>
<br>
<a href="index.php">GO BACK TO THE HOME PAGE</a>
</body>
</html>