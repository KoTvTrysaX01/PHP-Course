
<?php
    // 1. MySQLi Extension -> Easy
    // 2. PDO (PHP Data Object) -> More rich and complex. OOP must be known

    include("database.php");

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        }
    }
    else{
        echo "No user found";
    }


    mysqli_close($conn);
?>