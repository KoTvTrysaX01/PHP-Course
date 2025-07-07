<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="get"> -->
    <!-- <form action="index.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form> -->

    <form action="index.php" method="get">
        <label>Quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>


<?php
    // echo $_GET["username"] . "<br>";
    // echo $_GET["password"] . "<br>";
    
    // echo "{$_GET["username"]} <br>";
    // echo "{$_GET["password"]} <br>";

    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>";

    $item = "pizza";
    $price = 5.99;
    $quantity = $_GET["quantity"];
    $total = null;
    $total = $quantity * $price;
    echo"You have ordered {$quantity} x {$item}/s<br>";
    echo"Your total is: \${$total}";
?>

