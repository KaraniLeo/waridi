<?php
$servername = "localhost:3307";
$username = "root";
$password = "Trinity876#";
$dbname = "waridi";

// Create a mysqli object for use in other files
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
