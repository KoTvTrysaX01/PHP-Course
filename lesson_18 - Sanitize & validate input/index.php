<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username"><br>

        age:<br>
        <input type="text" name="age"><br>

        email:<br>
        <input type="text" name="email"><br>

        <input type="submit" name="login" value="Login">

    </form>    
</body>
</html>

<?php
    if(isset($_POST["login"])){
        //$username = $_POST["username"];

        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        // echo "Hello {$username}<br><br>";
        
        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        // echo "You are {$age} years old<br><br>";

        // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        // echo "Your email is {$email}";


        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($age)){
            echo"That number isnt valid";
        }
        else{
            echo"You are {$age} years old";
        }

        if(empty($email)){
            echo"<br>That email isnt valid";
        }
        else{
            echo"<br>Your {$email} is valid";
        }
    }

?>

