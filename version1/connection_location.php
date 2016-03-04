<?php
$servername = "localhost";
$username = "root";
$password = "acb132";
 // Create connection
 $conn = new mysqli($servername, $username, $password);
 
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 
 if(!mysqli_select_db($conn,"project"))
 {
     echo "selection failed ";
     exit;
 }
 ?>
