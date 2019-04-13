<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    dcie("Connetion failed: " . $conn->connect_error);
} 