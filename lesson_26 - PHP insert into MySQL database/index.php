
<?php
    // 1. MySQLi Extension -> Easy
    // 2. PDO (PHP Data Object) -> More rich and complex. OOP must be known

    include("database.php");

    $username = "Patrick";
    $password = "rock3";

    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user, password)
                        VALUES ('$username', '$hash')";
    

    

    try{
        mysqli_query($conn, $sql);
        echo "User is now registered<br>";
    }
    catch(mysqli_sql_exception){
        echo "Could not register user<br>";

        //Error does not occur??
    }
    mysqli_close($conn);
?>