/*

Step-by-Step Guide:

	1.	Download XAMPP:
	•	Download XAMPP from the official website: XAMPP Download.
	•	Follow the installation instructions provided by the installer.
	2.	Install XAMPP:
	•	Run the downloaded installer and follow the on-screen instructions.
	•	During installation, make sure to select Apache and PHP components.
	3.	Start Apache Server:
	•	After installation, open the XAMPP Control Panel.
	•	Start the Apache server by clicking on the “Start” button next to Apache.
	4.	Create PHP File:
	•	Create a new file named index.php.
	•	Add the following code to index.php:

<!DOCTYPE html>
<html>
<head>
<title>Hello World Program</title>
</head>
<body>
<?php
echo "Hello World!";
?>
</body>
</html>


	5.	Place PHP File:
	•	Move the index.php file to the htdocs directory inside the XAMPP installation directory (usually located at C:\xampp\htdocs).
	6.	Open Web Browser:
	•	Open your web browser (e.g., Chrome, Firefox, Edge).
	7.	Access PHP File:
	•	In the address bar of your web browser, enter the following URL:

http://localhost/index.php

	7.	
	•	This will load your index.php file through the local Apache server.
	8.	View Output:
	•	You should now see “Hello World!” displayed in your web browser.

readme.md File:

You can create a readme.md file in your project directory with the following content:

# Hello World PHP Program

This repository contains a simple PHP program that prints "Hello World!".

## Instructions:

1. **Download XAMPP**:
   - Download XAMPP from [here](https://www.apachefriends.org/index.html).

2. **Install XAMPP**:
   - Follow the installation instructions provided by the installer.
   - Make sure to select Apache and PHP during the installation process.

3. **Start Apache Server**:
   - Open the XAMPP Control Panel and start the Apache server.

4. **Place PHP File**:
   - Place the `index.php` file in the `htdocs` directory inside the XAMPP installation directory (usually located at `C:\xampp\htdocs`).

5. **Access PHP File**:
   - Open your web browser and enter `http://localhost/index.php` in the address bar.

6. **View Output**:
   - You should see "Hello World!" displayed in your web browser.

Save this content in a file named readme.md in your project directory. This file will provide instructions for running the PHP program to anyone who accesses your project repository.

*/



//Write a PHP script to print "hello world."

<!DOCTYPE html>
<html>
<head>
<title> Hello World Program </title>
</head>
<body>
<?php
echo "Hello World!";
?>
</body>
</html>