<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "collegedatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table named college_admission_form
$sql = "CREATE TABLE college_admission_form (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    phone_number VARCHAR(15), 
    date_of_birth DATE,
    gender ENUM('Male', 'Female', 'Other'), 
    nationality VARCHAR(30),
    address VARCHAR(100),
    city VARCHAR(30), 
    state VARCHAR(30),
    zip_code VARCHAR(10), 
    country VARCHAR(30),
    course VARCHAR(50),
    semester ENUM('Spring', 'Summer', 'Fall'),
    year YEAR
)";

if ($conn->query($sql) === TRUE) {
    echo "Table college_admission_form created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>

