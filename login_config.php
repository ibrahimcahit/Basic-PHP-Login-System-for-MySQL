<?php

/* 
Configuration file for "PHP Login System For Websites"

This configuration file created for MySQL databases

İbrahim Ozdemir - 2020
*/

// Update with your own credentials

define('DB_SERVER', 'localhost'); // Server IP or URL. Left 'localhost' if you are going to use it in same host with MySQL. 

define('DB_USERNAME', 'username'); // Username of one of your MySQL database users.

define('DB_PASSWORD', 'password'); // Password for user

define('DB_NAME', 'database name'); // Name of your own MySQL database.

 

// Connect to MySQL database

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

 

// Check connection; if not, debug.

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

?>