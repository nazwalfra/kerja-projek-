<?php
// Start the session
session_start();

// Check if the user is already logged in, if yes, redirect to the index page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Your login logic goes here

// Assume authentication is successful for this example
// Set session variables
$_SESSION["loggedin"] = true;
$_SESSION["username"] = "example_user";

// Redirect to the index page
header("location: index.php");
exit;
?>
