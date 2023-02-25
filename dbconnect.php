<?php
$servername = "localhost";
$username = "root";
$password = ""; // No password
$database = "DBProject";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
