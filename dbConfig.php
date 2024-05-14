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

try {
    // SQL statement to alter the table
    $sql = "ALTER TABLE login MODIFY COLUMN id INT AUTO_INCREMENT";

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>