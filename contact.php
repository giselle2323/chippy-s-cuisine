<?php 
$fullname = $_POST['fullname'];
$email = htmlspecialchars($_POST['email']);
$message =$_POST['message'];
saveToFile($fullname,  $email, $message); 
saveToDatabase($fullname, $email,  $message);
header('Location:success.html');

function saveToFile($fullname,$email, $message) {   
	$fileHandler = fopen('contact.txt', 'a');   
	$string = $fullname . ',' . $email. ','  . $message ."\n";   
	fwrite($fileHandler, $string);   
	fclose($fileHandler); 
}

function saveToDatabase($fullname,$email, $message) {   
    $serverName = "localhost";   
    $database = "chippy";   
    $username = "root";   
    $password = "";
    //Open database connection   
    $conn = mysqli_connect($serverName, $username, $password, $database);
    // Check that connection exists   
    if (!$conn) {       die("Connection failed: " . mysqli_connect_error());   }     
    $sql = "INSERT INTO contact (fullname,  email, message,created_date)       
    VALUES ('$fullname','$email','$message', NOW())";   
	$result = mysqli_query($conn, $sql);
    //Check for errors   
    if (!$result) {       die("Error: " . $sql . "<br>" . mysqli_error($conn));   }   
    //Close the connection   
    mysqli_close($conn); 
}
?>