<?php
session_start();
require_once('dbConfig.php');

function addUser($conn, $username, $password) {
    $sql = "SELECT * FROM login WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);

    if($stmt->rowCount() == 0) {
        $sql = "INSERT INTO login (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([$username, $password]);
        return $result;
    } else {
        return false; // User already exists
    }
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if(empty($username) || empty($password)) {
        echo '<script> 
        alert("The input field is empty!");
        window.location.href = "register.php";
        </script>';
    } else {
        if(addUser($conn, $username, $password)) {
            header('Location: login.php');
            exit(); // Ensure script stops executing after redirection
        } else {
            echo '<script> 
            alert("Username already exists!");
            window.location.href = "register.php";
            </script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="register.php" method="post">
        <input type="text" name="username" placeholder="Enter your username"/>
        <input type="password" name="password" placeholder="Enter your password"/>
        <input type="submit" name="register" value="Register"/>
    </form>
    <p><a href="login.php">Go to Login</a></p>
</body>
</html>
