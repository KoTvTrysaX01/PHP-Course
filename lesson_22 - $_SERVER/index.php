<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post"> -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        username:<br>
        <input type="text" name="username">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php

    //$_SERVER[];

    foreach($_SERVER as $key => $value){
        echo "{$key} = {$value} <br>";
    }

    // if(isset($_POST["submit"])){

    // }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "HELLO";
    }


?>