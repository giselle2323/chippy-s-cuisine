<?php 
$textBox = $_POST['textBox'];
$fullName = $_POST['fullName'];
$plate = $_POST['plate']; 
$email = htmlspecialchars($_POST['email']);
$address = $_POST['address'];
$tele = $_POST['tele'];
saveToFile($textBox, $fullName, $plate, $email, $address, 
    $tele); 
saveToDatabase($textBox, $fullName, $plate, $email, $address, 
    $tele);
header('Location:success.html');

function saveToFile($textBox, $fullName, $plate, $email, $address, $tele) {   
	$fileHandler = fopen('delivery.txt', 'a');   
	$string = $textBox . ',' . $fullName . ',' . $plate. ',' . $email. ',' . $address. ',' . $tele . ','  . "\n";   
	fwrite($fileHandler, $string);   
	fclose($fileHandler); 
}

function saveToDatabase($textBox, $fullName, $plate, $email, $address, $tele) {   
    $serverName = "localhost";   
    $database = "chippy";   
    $username = "root";   
    $password = "";
    //Open database connection   
    $conn = mysqli_connect($serverName, $username, $password, $database);
    // Check that connection exists   
    if (!$conn) {       die("Connection failed: " . mysqli_connect_error());   }     
    $sql = "INSERT INTO orders (textBox, fullName, plate, email, address, tele, status, created_date)       
    VALUES ('$textBox', '$fullName', '$plate', '$email', '$address', 
    '$tele', 'pending', NOW())";   
	$result = mysqli_query($conn, $sql);
    //Check for errors   
    if (!$result) {       die("Error: " . $sql . "<br>" . mysqli_error($conn));   }   
    //Close the connection   
    mysqli_close($conn); 
}
?>