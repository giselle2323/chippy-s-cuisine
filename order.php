<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>ORDERS</title>

	<link href="vendor/css/bootstrap.min.css" rel="stylesheet">
	<style>
	tr:hover{
		background: green;
	}
	td a {
		display: block;
		border: 1px solid black;
		padding: 16px;
	}
  
</style>
</head>


<div class="container">

  <table class="table table-bordered table-responsive">
   <thead>
    <tr>
     <th>id</th>
     <th>Food</th>
     <th>Fullname</th>
     <th>Email</th>
     <th>Telephone</th>
     <th>Address</th>
     <th>Plate</th>
     <th>Status</th>
     <th>Created_date</th>
     <th> Resolve order</th>
   </tr>
 </thead>
 <tbody>
  <tr>
   <?php
   include("db.php");

   $result = mysql_query("SELECT * FROM orders");
   if ($result === FALSE){
    die(mysql_error());
  }

  while($test = mysql_fetch_array($result))
  {
    $id = $test['id']; 
    echo"<td> <a href='./resolve_order.php?id=$id'>".$test['id']."</a></td>";
    echo"<td>".$test['textBox']."</td>";
    echo"<td>".$test['fullName']."</td>";
    echo"<td>".$test['email']."</td>";
    echo"<td>".$test['tele']."</td>";
    echo"<td>".$test['address']."</td>"; 
    echo"<td>".$test['plate']."</td>";
    echo"<td>".$test['status']."</td>";
    echo"<td>".$test['created_date']."</td>";
    echo"<td>".$test['created_date']."</td>";
    echo "</tr>";
  }
  mysql_close($con);
  ?>
</table>

</div>
</body>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/js/bootstrap.bundle.min.js"></script>
</html>