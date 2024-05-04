<?php
 session_start();
 
 // verify email
 // syntax checking 
 function verify_email($email){
 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    return false;
 }
 //domain checking 
 $domain= explode('@','$email');
 $domain=array_pop($domain);
 if(!checkdnsrr($domain,'MX')){
    return false;
}
return true;
}
if(isset($_POST['email'])){
    $email=$_POST['email'];
 
// ....
$token = bin2hex(random_bytes(10));
//store token in a file 
$subject ="password reset";
$message= "click on link to reset your password:(https://php.net/smtp)";
mail($email,$subject,$message);
echo"an email has been sent to you with a link to reset your password ";
}else {
    echo "please enter your email address";
}


?>