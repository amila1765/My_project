<?php
// db/database.php
$servername = "localhost";
$username = "root"; // database username
$password = ""; // database password
$dbname = "db_parking_ease"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>