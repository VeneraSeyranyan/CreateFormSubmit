<?php
$servername = "localhost";
$username = "root";
$password = "Pass123!@#";
$dbname = "Users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Create database
$sql = "ALTER TABLE users ADD image varchar(255) NOT NULL";
if ($conn->query($sql) === TRUE) {
    echo "Add successfully";
} else {
    echo "Error : " . $conn->error;
}
$conn->close();
?>
