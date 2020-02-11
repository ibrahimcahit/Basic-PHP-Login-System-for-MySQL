<?php

session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: your_host/site_url/login_check.php");
    exit;
}
?>
 <!-- Put your desired HTML file here-->
