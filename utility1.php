<?php
session_start();

// Connect to database
$conn = mysqli_connect("localhost", "root", "", "users");

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get username, password, and email from form
$username = $_POST["username"];
$utility = $_POST["utility"];
$apartment=$_POST["apartment"];

// Query database to check if user already exists
$query = "SELECT * FROM utility WHERE utility ='$utility'";
$result = mysqli_query($conn, $query);

// Check if user already exists
if (mysqli_num_rows($result) > 0) {
	// User users exists, display error message
	echo "request already made and its being processed";
} else {
	// Insert new user into database
	$query = "INSERT INTO utility (username,utility, apartment ) VALUES ('$username', '$utility','$apartment')";
	mysqli_query($conn, $query);
	// Signup successful, redirect to login page
	header("Location: successful.html");
	exit;
}
?>