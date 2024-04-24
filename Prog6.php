

<?php
//Write a PHPscript to check whether given number is palindrome or not.

function isPalindrome($number) {
    $originalNumber = $number;
    $reverseNumber = 0;
    
    while ($number > 0) {
        $remainder = $number % 10;
        $reverseNumber = $reverseNumber * 10 + $remainder;
        $number = (int)($number / 10);
    }
    
    if ($originalNumber == $reverseNumber) {
        return true;
    } else {
        return false;
    }
}

$number = 12321; // Change this number to check for different numbers
if (isPalindrome($number)) {
    echo "$number is a palindrome.";
} else {
    echo "$number is not a palindrome.";
}

?>

