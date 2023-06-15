<?php
// Start the session
session_start();
// Check if the counter cookie is set
if (!isset($_COOKIE['counter'])) {
// If the counter cookie is not set, set it to 0
setcookie('counter', 0, time() + (86400 * 30), '/'); // Cookie expires in 30 days
}
// Check if the session counter is set
if (!isset($_SESSION['counter'])) {
// If the session counter is not set, set it to 0
$_SESSION['counter'] = 0;
}
// Increment the counter
$_COOKIE['counter']++;
$_SESSION['counter']++;
// Display the counter values
echo "Cookie Counter: " . $_COOKIE['counter'] . "<br>";
echo "Session Counter: " . $_SESSION['counter'] . "<br>";
session_destroy();
?>
