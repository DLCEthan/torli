<?php
$servername = "mysql6.gear.host";
$username = "torlidb";
$password = "Rr6OkVo-~t41";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?