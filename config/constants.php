<?php

// Star Session
session_start();

define('SITEURL', 'https://gentle-shore-25441.herokuapp.com/food-order/');
define('LOCALHOST', 'us-cdbr-east-03.cleardb.com');
define('DB_USERNAME', 'bdecbb76cd17fa');
define('DB_PASSWORD', 'fce12789');
define('DB_NAME', 'food-order');


$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
