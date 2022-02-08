<?php
$servername = "localhost";
$bd = "352589";
$password = "39667422";
$username = "352589";

// Create connection
$conn = new MySQLi($servername, $bd, $password, $username);

// Check connection
if ($conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
} else
echo "Connected successfully";
?>