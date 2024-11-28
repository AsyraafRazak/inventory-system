<?php
session_start();

// Check if the user is logged in by verifying session variables
if (!isset($_SESSION['user-id'])) {
    // If not logged in, redirect to login page
    header("Location: /inventory-system");
    exit();
}
?>