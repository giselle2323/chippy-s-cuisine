
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>ORDERS</title>

	<link href="vendor/css/bootstrap.min.css" rel="stylesheet">
	<style>
  body{
    color: green;
  }
  header{
    text-align: center;
    font-size: 30px;
  }
  table{
  border: 1px solid black;
  text-align: center;
  width: 100%;
}
	tr:hover{
		background: green;
	}
	td a {
    background-color: green;
    color: white;
		display: block;
		border: 1px solid black;
		padding: 16px;
    text-decoration: none;
	}
  th{
    height: 50px;
  }
  
</style>
</head>
<body>
  <div style="overflow-x:auto;">
    <header> ORDERS</header>
<?php
require('db.php');

$sql = "SELECT * FROM orders";

$result = mysqli_query($con,$sql)or die(mysqli_error());

echo "<table>";
echo "<tr><th>id</th><th>food</th><th>fullName</th><th>email</th><th>tele</th><th>address</th><th>plate</th><th>status</th><th>created_date</th></tr>";

while($row = mysqli_fetch_array($result)) {

    $id = $row['id'];
    $textBox = $row['textBox'];
    $fullName = $row['fullName'];
    $email = $row['email'];
    $tele = $row['tele'];
    $address = $row['address'];
    $plate = $row['plate'];
    $status = $row['status'];
    $created_date= $row['created_date'];
    echo "<tr><td><a href='./resolve_order.php?id=$id'>".$id."Resolve Order</a></td><td style='width: 600px;'>".$textBox."</td><td>".$fullName."</td><td>".$email."</td><td>".$tele."</td><td>".$address."</td><td>".$plate."</td><td>".$status."</td><td>".$created_date."</td></tr>";
} 

echo "</table>";
mysqli_close($con);
?>
</div>
</body>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/js/bootstrap.bundle.min.js"></script>
</html>