<?php
    // $temp = 25;

    // $cloudy = true;


    // if($temp < 0 || $temp > 30){
    //     echo"The weather is bad. <br>";
    // }
    // else{
    //     echo"The weather is good. <br>";
    // }

    // if($cloudy){
    //     echo "It's cloudy. <br>";
    // }
    // else{
    //     echo "It's sunny. <br>";
    // }

    $age = 11;
    $citizen = true;

    if(!($age >= 18) || !$citizen){
        echo "You cannot vote";
    }
    else{
        echo "You can vote";
    }

    $child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }

    echo"The ticket price is \${$ticket}";
?>

