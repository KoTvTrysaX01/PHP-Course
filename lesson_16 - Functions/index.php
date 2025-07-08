
<?php
    // function happyBirtday($first_name, $age){
    //     echo "Happy Birthday dear {$first_name} <br>";
    //     echo "Happy Birthday dear you <br>";
    //     echo "Happy Birthday to you <br>";
    //     echo "You are {$age} years old! <br><br>";
        
    // }

    // happyBirtday("Vadim", 23);
    // happyBirtday("Danya", 23);
    // happyBirtday("Nasty", 24);

    // function isEven($number){
    //     return $number % 2 == 0;
    // }

    // echo isEven(10);

    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(4, 4);
?>

