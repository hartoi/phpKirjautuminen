<?php
$servername = "localhost";
$username = "kirjautuminen";
$password = "Q2werty";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>