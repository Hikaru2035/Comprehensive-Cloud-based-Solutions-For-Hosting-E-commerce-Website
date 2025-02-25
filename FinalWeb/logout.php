<?php
// Start the session
session_start();

// URL of the logout-handler in the private server
$logoutHandlerUrl = "http://10.0.5.234/backend/logout-handler.php";

// Initialize cURL to send a request to the private server
$ch = curl_init($logoutHandlerUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

// Execute the cURL request (this is to notify the private server, if necessary)
$response = curl_exec($ch);

// Close the cURL session
curl_close($ch);

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to the login page or homepage
header("Location: index.php");
exit();
?>
