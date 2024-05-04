<?php
session_start();
//unsetting all session variables 
session_unset();

// destroy the session 
session_destroy();

//redirect to login page 
header("location:index.html")
?>