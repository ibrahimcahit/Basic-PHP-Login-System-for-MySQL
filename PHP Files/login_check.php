<?php

/* 
Login Checker file for "PHP Login System For Websites"


*/


session_start();

 
// Check if the user is logged in; if not, then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    header("location: your_location.php"); // Enter the address you want to forward, when login is successful.

    exit;

}

else{

    header("location: your_location.php"); // Enter the address you want to forward, when login is unsuccessful or user not logged-in.

}

?>

 

