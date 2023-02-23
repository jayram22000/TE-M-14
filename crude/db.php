<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "team14";
$dbname = "data2";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$date = $_POST["date"];
$sql = "INSERT INTO reservation (name, email, phone, date) VALUES ('$name', '$email', '$phone', '$date')";
if ($conn->query($sql) === TRUE) {
  echo "Reservation added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>