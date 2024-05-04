<?php
session_start();

if(isset($_GET['token'])){
	$token = $_GET['token'];
	
	// Verify the token here
	// ...
	
	if(isset($_POST['password']) && isset($_POST['confirm_password'])){
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		
		if($password == $confirm_password){
			// Update the password in the database or a file
			// ...
			echo "Your password has been reset.";
		} else {
			echo "Passwords do not match.";
		}
	}
} else {
	echo "Invalid token.";
}
?>
<style>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        
        h1 {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4c89af;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color:  #4578a0;
        }
        
        @media screen and (max-width: 600px) {
            form {
                max-width: 80%;
            }
        }

    </style>

<h1>Reset Password</h1>
<form action="reset.php" method="post">
	<input type="password" name="password" placeholder="Password">
	<input type="password" name="confirm_password" placeholder="Confirm Password">
	<input type="submit" value="Submit">
</form>


