<?php
// Connect to the database
$servername = "db";
$username = "data2";
$password = "zack";
$dbname = "data2";
//creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

?>


