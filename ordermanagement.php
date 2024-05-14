<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canteen Menu</title>
</head>
<body>
    <h1>Welcome To the Canteen, here are the prices: </h1>
    <ul>
        <li>Fishball - 30php </li>
        <li>Kikiam - 40php </li>
        <li>Corndog - 50php </li>
    </ul>
    
    <form method= "post" action="calculate.php">
    <label for="food">Choose your order:</label>
        <select id="food" name="food">
            <option value="fishball">Fishball</option>
            <option value="kikiam">Kikiam</option>
            <option value="corndog">Corndog</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity" min="1" ><br><br>
        <label for="cash">Cash:</label>
        <input type="text" id="cash" name="cash" min="0" step="0.01" ><br><br>
        <input type="submit" name="submit" value="Submit Order">
    </form>
    <p><a href="logout.php">Logout</a></p>

    
</body>
</html>