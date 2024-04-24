

<?php
//Write a PHP script to implement atleast seven string functions.

// Original string
$string = "Hello, World!";

// 1. String Length
$length = strlen($string);
echo "1. String Length: $length\n";

// 2. Convert to Uppercase
$uppercase = strtoupper($string);
echo "2. Convert to Uppercase: $uppercase\n";

// 3. Convert to Lowercase
$lowercase = strtolower($string);
echo "3. Convert to Lowercase: $lowercase\n";

// 4. Substring
$substring = substr($string, 0, 5);
echo "4. Substring: $substring\n";

// 5. String Replace
$replacedString = str_replace("Hello", "Hi", $string);
echo "5. String Replace: $replacedString\n";

// 6. String Reverse
$reversedString = strrev($string);
echo "6. String Reverse: $reversedString\n";

// 7. String Position
$position = strpos($string, ",");
echo "7. String Position of ',': $position\n";

?>

