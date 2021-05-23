<?php

// Star Session
session_start();

define('SITEURL', 'https://gentle-shore-25441.herokuapp.com/food-order/');
define('LOCALHOST', 'us-cdbr-east-03.cleardb.com');
define('DB_USERNAME', 'b7e42ad3a7a562');
define('DB_PASSWORD', 'b4bfc92a');
define('DB_NAME', 'heroku_16e85c529f8feeb');


$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
