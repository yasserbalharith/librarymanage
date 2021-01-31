<?php

// Create connection
$connection = new mysqli("localhost", "root", "", "lms");
// Check connection
if ($connection->connect_error) {
    die("Failed to connect to Database: " . $connection->connect_error);
}
?>

