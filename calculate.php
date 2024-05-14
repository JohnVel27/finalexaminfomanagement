<!DOCTYPE html>
<html>
<head>
    <title>Total Price</title>
</head>
<body>
<?php
if(isset($_POST['submit'])){
    $food = $_POST['food'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

   
    $prices = array(
        'fishball' => 30,
        'kikiam' => 40,
        'corndog' => 50
    );

   
    $total_price = $quantity * $prices[$food];

    if ($cash >= $total_price) {
        $change = $cash - $total_price;
        echo "<p><span style='font-size: 40px; font-weight: bold;'>Total Price: $total_price PHP</span></p>";
        echo "<p><span style='font-size: 40px; font-weight: bold;'>Change: $change PHP</span></p>";
    } else {
        echo "<p><span style='font-size: 40px; font-weight: bold;'>Insufficient cash. Please provide enough cash.</span></p>";
    }
}
?>
    <p><a href="ordermanagement.php">Back to Calculator</a></p>
</body>
</html>
