<?php
session_start();
$conn = new mysqli("localhost", "root", "", "web_lab");

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn->query("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
</head>
<body>
<h2>Create Account</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="signup">Signup</button>
</form>

</body>
</html>
