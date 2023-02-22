<?php
$servername = "localhost";
$username = "root";
$password = "team14";
$dbname = "data2";
// creating connection 
$conn = new mysqli ($servername, $username, $password, $dbname);
// check connection 
if ($conn->connect_error){
    die("Connection failed; " . $conn->connect_error);
}
?>
