<?php 
session_start();
if(isset($_POST['submit']) AND isset($_POST['password'])){ 
        $serverName = "localhost";   
        $db_name = "chippy";   
        $username = "root";   
        $password = "";
 
        // connect to server and select database
        mysql_connect("$serverName", "$username", "$password")or die("cannot connect");
        mysql_select_db("$db_name")or die("cannot select database");
        //
        $username= ($_POST['username']);
        $password= ($_POST['password']);
        $sql = mysql_query("SELECT * FROM signin  
        WHERE username='$username' AND 
        password='$password' 
        LIMIT 1"); 
         if(mysql_num_rows($sql) == 1){ 
        $_SESSION['username'] = $username;
        header('Location: order.php');

   }
   else{
    $msg ="Wrong credentials";
   }
}
if(isset($msg) & !empty($msg)){
    echo $msg;
}
?> 
        
