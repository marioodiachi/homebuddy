<?php
// Configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'users';


// Connect to database
$conn = mysqli_connect("localhost", "root", "", "users");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Utility</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .utility-container {
            width: 80%;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #4c75af;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #4568a0;
        }
        .links {
    margin-top: 20px;
    font-size: 14px;
    text-align: center;
  }
  
  .links a {
    color: #007bff;
    text-decoration: none;
  }
  
  .links a:hover {
    text-decoration: underline;
  }
    </style>
  
	
</head>
<body>
    <?php
    session_start();
  
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        
    } else {
        // Handle case where user is not logged in (e.g., redirect to login page)
    }
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

 
    ?>


   
	<div class="utility-container">
       
		<h1>Utility</h1>
		<form action="utility1.php" method="post">
        <label for="username">Username:</label>
        <select name="username">
            <option value="<?php echo $username; ?>" selected><?php echo $username; ?></option>
            </select>
            <label for="apartment">Apartment:</label>
        <select name="apartment">
            <option value="<?php echo $user_data['apartment']; ?>" selected><?php echo $user_data['apartment']; ?></option>
            </select>

        <!--   <label for="apartment"></label>
          <select name="apartment" id="apartment">
				<option value="apartment_b1">b1</option>
				<option value="apartment_b2">b2</option>
				<option value="apartment_b3">b3</option>
                <option value="apartment_b4">b4</option>
                <option value="apartment_b5">b5</option>
                <option value="apartment_b6">b6</option>
                <option value="aparment_b7">b7</option>
                <option value="apartment_b8">b8</option>
			</select>
 -->

			<label for="utility-type">Utility Type:</label>
			<select name="utility" id="utility">
				<option value="electrician">Electrician</option>
				<option value="plumber">Plumber</option>
				<option value="carpenter">Carpenter</option>
			</select>
            <input type="submit" value="Request">

		</form>
        <div class="links">
                <a href="dashboard.php">GO BACK</a>
            </div>
	</div>
</body>
</html>
