

<?php
//Write a PHP script to implement constructor and destructor
class Example {
    // Constructor
    public function __construct() {
        echo "Constructor called.\n";
    }

    // Destructor
    public function __destruct() {
        echo "Destructor called.\n";
    }
}

// Create an instance of the class
$example = new Example();

// The object is now out of scope and will be destroyed
echo "End of script.\n";

?>
x
