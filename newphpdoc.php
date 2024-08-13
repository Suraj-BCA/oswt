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


<html>
    <head>
</head>
<body>
    <form method="post">
        NAME: <input type="text" name="name"><br>
        Cell Number: <input type="text" name="cell"><br>
        Email: <input type="email" name="email"><br>
        <input type="submit" value="Register">
</form>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST["name"];
    $cell = $_POST["cell"];
    $email = $_POST["email"];

    $sql = "INSERT INTO class (name, cellno, email)
        VALUES ('$name', '$cell', '$email')";

if (mysqli_query($conn, $sql) === TRUE) {
    echo "<script>alert('Registration Successful'); window.location.href='login.php';</script>";
    exit;
} else {
    echo "<script>alert('Registration Failed: " . mysqli_error($conn) . "'); window.location.href='registration.php';</script>";
    exit;
}
}
mysqli_close($conn);
?>

$query = "SELECT *from class";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    ?>
    <table border='1>
    <tr>
        <th>Name</th>
        <th>Cell Number<th>
        <th>Email</th>
        <th colspan='2'>Operations</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
    <td>" .$row['name']."</td>
    <td>" .$row['cellno']."</td>
    <td>" .$row['email']."</td>
    

}
}