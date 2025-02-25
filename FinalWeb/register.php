<?php
// Collect form data
$username = $_POST['username'];
$password = $_POST['password'];  // In real apps, use hashing for password

// URL of the Application EC2 instance that handles registration (e.g., using its private IP)
$application_url = "http://10.0.5.234/backend/register-handler.php";

// Prepare POST data
$data = array(
    'username' => $username,
    'password' => $password
);

// Use cURL to send the POST request to the application EC2
$options = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'content' => http_build_query($data),
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents($application_url, false, $context);

// Handle the response from the application EC2
if ($result === FALSE) {
    die('Error');
} else {
    echo $result;  // Display success or error message
}
?>
