//Write a PHP script to to generate a Fibonacci series using Recursive function.

<?php

function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Prompt user for input
echo "Enter the number of terms in the Fibonacci series: ";
$terms = intval(readline());

echo "Fibonacci series with $terms terms: ";
for ($i = 0; $i < $terms; $i++) {
    echo fibonacci($i);
    if ($i < $terms - 1) {
        echo ", ";
    }
}

?>

