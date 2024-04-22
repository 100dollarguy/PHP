//Write a PHP program to insert new item in array on any position in PHP.

<?php

// Original array
$originalArray = array("apple", "banana", "cherry", "date");

// Item to insert
$newItem = "orange";

// Position to insert (0-based index)
$insertPosition = 2;

// Insert the new item at the specified position
array_splice($originalArray, $insertPosition, 0, $newItem);

// Display the modified array
echo "Modified Array:\n";
print_r($originalArray);

?>

