<?php
$servername = "localhost";
$username = "student_12002476";
$password = "NfgutGrzwj2g";
$dbname = "student_12002476";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "connected successfully";
?>