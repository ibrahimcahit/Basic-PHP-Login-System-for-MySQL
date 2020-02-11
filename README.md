# Basic PHP Login System for MySQL
If you new with webpage design and want to add basic Login system for specific page on your site, this code what you are looking for!

## Prerequisites

You need to have host with MySQL and phpMyAdmin pre-installed. Because of MySQL, I higly recommended use a real host with MySQL database.

Also you need to configure Database, Username and Password for login system on MySQL.

* [MySQL Website](https://www.mysql.com/) 

## The Login System

Login system consists of three parts:
* login.php
* login_config.php
* login_check.php

You need to change marked fields in the codes.


### login_config.php - Configuration of MySQL database credentials
Configuration of MySQL Database credentials

* [login_config.php Code](https://github.com/ibrahimcahit/Basic-PHP-Login-System-for-MySQL/blob/master/PHP%20Files/login_config.php)


### login_check.php - Check if current user logged and prevent acces of unlogged people to login-secured page. 
Basic Authentication prosses to ensure, if user logged or not logged.

* [login_check.php Code](https://github.com/ibrahimcahit/Basic-PHP-Login-System-for-MySQL/blob/master/PHP%20Files/login_check.php)

### login.php - Main page for Login procces 
Design of the login box done on HTML with help of Bootstrap.

You can change HTML file with whatever you want.

* [login.php Code](https://github.com/ibrahimcahit/Basic-PHP-Login-System-for-MySQL/blob/master/PHP%20Files/login.php)

### example_logged_page.php - Example page with basic Authentication
PHP code below the HTML; sents user to login_check.php before entering the real site. 

* [example_logged_page.php Code](https://github.com/ibrahimcahit/Basic-PHP-Login-System-for-MySQL/blob/master/PHP%20Files/example_logged_page.php)
