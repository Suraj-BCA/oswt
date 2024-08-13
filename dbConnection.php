<?php
$servername="localhost";
$username="root";
$password="";
$dbname="oswt";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn) { 
   echo "Connection Establised"; 
} 
else { 
   die("Error". mysqli_connect_error()); 
} 
	
?> 
