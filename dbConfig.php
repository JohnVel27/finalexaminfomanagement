<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "php_login_system";
$dsn = "mysql:host={$host};dbname={$dbname}";

$conn = new PDO($dsn,$user,$password);
$conn->exec("SET time_zone = '+08:00';");

if(mysqli_connect_error()){
    echo 'error';
}
?>
