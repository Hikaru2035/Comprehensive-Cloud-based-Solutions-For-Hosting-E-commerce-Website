<?php
$servername = "dbtest.cxq6wmgms7iv.ap-southeast-1.rds.amazonaws.com"; // Replace with your RDS endpoint
$username = "admin";   // Replace with your RDS DB username
$password = "admin123";   // Replace with your RDS DB password
$dbname = "dbtest";   // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data from the Web EC2
$username_input = $_POST['username'];
$password_input = $_POST['password'];  // In real apps, hash passwords

// Hash the password for security
$hashed_password = password_hash($password_input, PASSWORD_DEFAULT);

// Use prepared statement to insert new user into the database
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("sss", $username_input, $hashed_password);

if ($stmt->execute()) {
    echo "Registration successful";
} else {
    echo "Error: " . $stmt->error;
}

$conn->close();
?>
