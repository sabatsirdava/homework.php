<?php

$number1 = 0;
$number2 = 0;
$result = $number1 * $number2;
do {
    echo "---------- \n";
    echo "Enter first number: \n";
    $number1 = readline();
    echo "Enter second number: \n";
    $number2 = readline();
    if ($number1>100 or $number2>100) {
        echo "Please enter number from 0 to 100 \n";
    } else {
        $result = $number1 * $number2;

        echo "Result is $result \n";
    }
} while ($number1!=0 and $number2 != 0);

