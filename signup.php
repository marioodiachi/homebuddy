<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "users");

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get username, password, and email from form
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$apartment=$_POST["apartment"];

// Query database to check if user already exists
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

// Check if user already exists
if (mysqli_num_rows($result) > 0) {
	// User already exists, display error message
	echo "Username already taken";
} else {
	// Insert new user into database
	$query = "INSERT INTO users (username,email ,password, apartment ) VALUES ('$username', '$email', '$password','$apartment')";
	mysqli_query($conn, $query);
	// Signup successful, redirect to login page
	header("Location: index.html");
	exit;
}
?>