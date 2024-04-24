

<!DOCTYPE html>
<html>
<head>
    <title>Date and Time Functionality</title>
</head>
<body>

<h2>Current Date and Time:</h2>
<?php
//Write a PHP script to show the functionality of date and time function.
// Display current date and time
echo "<p>Current Date: " . date("Y-m-d") . "</p>";
echo "<p>Current Time: " . date("H:i:s") . "</p>";
?>

<h2>Custom Date and Time Formatting:</h2>
<?php
// Custom date and time formatting
echo "<p>Custom Date Format: " . date("l, F j, Y") . "</p>";
echo "<p>Custom Time Format: " . date("g:i a") . "</p>";
?>

<h2>Manipulating Dates:</h2>
<?php
// Manipulating dates
$nextWeek = time() + (7 * 24 * 60 * 60);
echo "<p>Today: " . date("Y-m-d") . "</p>";
echo "<p>Next Week: " . date("Y-m-d", $nextWeek) . "</p>";

$newYear = mktime(0, 0, 0, 1, 1, date("Y") + 1);
echo "<p>Next New Year: " . date("Y-m-d", $newYear) . "</p>";
?>

<h2>Timezone Handling:</h2>
<?php
// Timezone handling
date_default_timezone_set("America/New_York");
echo "<p>New York Time: " . date("Y-m-d H:i:s") . "</p>";
date_default_timezone_set("Asia/Tokyo");
echo "<p>Tokyo Time: " . date("Y-m-d H:i:s") . "</p>";
?>

</body>
</html>

