<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$connect = mysqli_connect("localhost", "root", "", "chippy");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:index.php");  
 }  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM signin WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['username'] = $username;  
                header("location:order.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 } 
 mysqli_close($connect); 
?>

