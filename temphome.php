<?php
session_start(); // Start the session

if (!isset($_SESSION['name']) || !isset($_SESSION['type'])) {
    // Redirect to login page if session variables are not set
    header("Location: login.html");
    exit;
}

echo "Welcome, " . $_SESSION['name'] . "! You are logged in as " . $_SESSION['type'] . ".";
?>
