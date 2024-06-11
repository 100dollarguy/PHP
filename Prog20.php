<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Removed unnecessary single quote
$dbname = "collegedatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS student (
    rollno INT(6) PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT,
    course VARCHAR(50),
    dob DATE
)";

// Execute SQL query to create table
if ($conn->query($sql) === TRUE) {
    echo "Table 'student' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>

