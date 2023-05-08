<?php

// Database connection settings
define('servername', 'localhost');
define('dbname', 'upkeep');
define('username', 'root');
define('password', '');

// Create database connection
$conn = new mysqli(servername, username, password, dbname);

// Check for connection errors
if ($conn->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

?>

