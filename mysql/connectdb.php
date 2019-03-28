<?php

// Your database settings

$servername = 'localhost';

$username = 'root';

$password = '';

$dbname = 'borrowplus';

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

 die('Connection failed: ' . $conn->connect_error);

}

$conn->set_charset('utf8');

?>
