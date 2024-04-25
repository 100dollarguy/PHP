<?php
// Original string
$string = "Hello, World!";

// 1. String Length
$length = strlen($string);
echo "1. String Length: $length\n";  // Output: 1. String Length: 13

// 2. Convert to Uppercase
$uppercase = strtoupper($string);
echo "2. Convert to Uppercase: $uppercase\n";  // Output: 2. Convert to Uppercase: HELLO, WORLD!

// 3. Convert to Lowercase
$lowercase = strtolower($string);
echo "3. Convert to Lowercase: $lowercase\n";  // Output: 3. Convert to Lowercase: hello, world!

// 4. Substring
$substring = substr($string, 0, 5);
echo "4. Substring: $substring\n";  // Output: 4. Substring: Hello

// 5. String Replace
$replacedString = str_replace("Hello", "Hi", $string);
echo "5. String Replace: $replacedString\n";  // Output: 5. String Replace: Hi, World!

// 6. String Reverse
$reversedString = strrev($string);
echo "6. String Reverse: $reversedString\n";  // Output: 6. String Reverse: !dlroW ,olleH

// 7. String Position
$position = strpos($string, ",");
echo "7. String Position of ',': $position\n";  // Output: 7. String Position of ',': 5
?>
