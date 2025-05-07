<?php
// File: admin/dbcon.php

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "Israr_project_ZD04970";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
