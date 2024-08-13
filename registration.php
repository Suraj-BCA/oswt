<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="register.php" method="POST">
        <label for="regno">Registration Number:</label><br>
        <input type="text" id="regno" name="regno" required><br><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="cellnum">Cell Number:</label><br>
        <input type="text" id="cellnum" name="cellnum" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="branch">Branch:</label><br>
        <input type="text" id="branch" name="branch" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>


