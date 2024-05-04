<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit;
}

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "users");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the username from the session
$username = $_SESSION['username'];

// Query the database to retrieve user's profile
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // Fetch user data
    $user_data = mysqli_fetch_assoc($result);
} else {
    // No user found with the session username
    echo "Error: User not found";
    exit;
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Profile</title>
</head>
<body>
    <div class="container">
        <div class="box profile-box">
            <header>User Profile</header>
            <div class="profile-info">
                <img src="<?php echo $user_data['profile_picture']; ?>" alt="Profile Picture">
                <h2>Name: <?php echo $user_data['username']; ?></h2>
                <p>Email: <?php echo $user_data['email']; ?></p>
                <p>Apartment No: <?php echo $user_data['apartment']; ?></p>
            </div>
            <div class="links">
                <a href="dashboard.php">GO BACK</a>
            </div>
        </div>
    </div>
</body>
</html>
