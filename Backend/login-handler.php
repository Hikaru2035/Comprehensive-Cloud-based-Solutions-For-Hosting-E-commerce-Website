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
$username_input = $_POST['username'];    // Get username from the login form
$password_input = $_POST['password'];    // Get password from the login form

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username_input);  // Bind the username parameter
$stmt->execute();
$result = $stmt->get_result();

// Check if the user exists and the password is correct
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Verify password using password_verify function
    if (password_verify($password_input, $user['password'])) {
        echo "Login successful";  // Return success message to Web EC2
    } else {
        echo "Invalid credentials";  // Incorrect password
    }
} else {
    echo "No such user found";  // No user with the provided username
}

$conn->close();
?>
