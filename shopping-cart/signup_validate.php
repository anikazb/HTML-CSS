<?php
if (isset($_POST['uname']) && isset($_POST['pass'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    try {
        $con = new PDO("mysql:host=localhost;dbname=sessiondb", "root", "12345");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert new user
        $stmt = "INSERT INTO users(uname, pass) VALUES('$uname', '$pass')";
        $con->query($stmt);

        echo "<script>
                alert('Signup Successful! Please Login.');
                window.location.assign('login.php');
              </script>";

    } catch(PDOException $e) {
        echo "<script>
                alert('User Already Exists or Database Error!');
                window.location.assign('signup.php');
              </script>";
    }

} else {
    echo "<script>
            alert('Fill all fields');
            window.location.assign('signup.php');
          </script>";
}
?>
