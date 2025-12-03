<?php
session_start();
$conn = new mysqli("localhost", "root", "", "web_lab");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE username='$username'");
    $row = $result->fetch_assoc();

    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="login">Login</button>
</form>

</body>
</html>
