//Write a PHP script to reverse a given number and calculate its sum.

<?php

function reverseNumber($number) {
    $reverse = 0;
    
    while ($number > 0) {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int)($number / 10);
    }
    
    return $reverse;
}

function calculateSum($number) {
    $reverse = reverseNumber($number);
    $sum = $number + $reverse;
    return $sum;
}

// Prompt user for input
echo "Enter a number: ";
$number = readline();

if (!is_numeric($number)) {
    echo "Please enter a valid number.";
} else {
    $reverse = reverseNumber($number);
    $sum = calculateSum($number);
    echo "Reverse of $number is $reverse\n";
    echo "Sum of $number and its reverse is $sum";
}

?>
