<?php
$cnmtrpdb = "localhost";
$username = "cnmtrpl";
$password = "fsqW,(K-V6se7(-";

// Create connection
$conn = new mysqli($cnmtrpdb, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>