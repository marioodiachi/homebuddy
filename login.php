<?php
//connect to database 
$conn=mysqli_connect("localhost","root","","users");
// checking connection
if(!$conn){
    die("connection failed:". mysqli_connect_error());
}
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){


// get users name from database 
$username=$_POST["username"];
$password=$_POST["password"];
}
//querying my database
$query="SELECT * FROM users WHERE  username='$username' AND password='$password'";
$result=mysqli_query($conn, $query);

//check if user exists
if(mysqli_num_rows($result)>0)
{
    //redirect to dashboard 
    $_SESSION['username']=$username;
    header("location: dashboard.php");
    exit;

}else{
    //login failed, display error message 
    echo" invalid password or username";
}
$_SESSION['username']=$username
?>