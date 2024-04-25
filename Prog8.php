<?php
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Specify the number of terms
$terms = 10; // Change this to the desired number of terms

echo "Fibonacci series with $terms terms: ";
for ($i = 0; $i < $terms; $i++) {
    echo fibonacci($i);
    if ($i < $terms - 1) {
        echo ", ";
    }
}
?>
