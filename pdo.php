<?php
$servername = "localhost";
$username = "mike";
$password = "L9CqtB6L";
$dbname = "penAndPaper";
//@$db = new mysqli('localhost', 'bookorama', 'bookorama123', 'books');
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
//echo "Connected successfully";
?>
