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
	

$registerNumber = $_POST["regno"];
$name = $_POST["name"];
$cellNumber = $_POST["cellnum"];
$email = $_POST["email"];
$branch = $_POST["branch"];

$sql = "SELECT * FROM student WHERE registerno = 'registerNumber'";
$result = mysqli_query ($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo "<html>
            <head>
                <title>Student Details</title>
            </head>
            <body>
                <table border='1'>
                    <tr>
                        <th>Register Number</th>
                        <th>Cell Number</th>
                        <th>Email</th>
                        <th>Branch</th>
                    </tr>";
}

while($row = mysqli_fetch_array($result))
{
    echo "<tr>
        <td>" . $row["registerno"] . "</td>
        <td>" . $row["cellno"] . "</td>
        <td>" . $row["email"] . "</td>
        <td>" . $row["branch"] . "</td>
</tr>";
}

?>