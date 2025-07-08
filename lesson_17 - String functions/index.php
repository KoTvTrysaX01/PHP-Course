
<?php
    //$username = "Vadim KoT Elshin";
    $phone = "123-456-7890";
    $username = array("Vadim", "Elshin");

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "0");
    // $phone = str_replace("-", "", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username, "Vadim Elshin");
    // $count = strlen($username);
    // $index = strpos($username, "d");
    // $firstName = substr($username, 0, 5);
    // $lastName = substr($username, 6);
    // $fullName = explode(" ", $username);

    // foreach($fullName as $name){
    //     echo"{$name} <br>";
    // }

    $username = implode(" ", $username);

    echo $username;

?>

