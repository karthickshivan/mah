<?php

$host ="localhost";
$dbname ="mahdb21";
$username = "root";
$password = " ";


error_reporting(E_ALL);
ini_set('display_error', 1);

session_start();
include 'dbconnect.php';
$conn = dbconnect(read, PDO);
$conn = dbconnect(write, PDO);
$connread = dbconnect (read,PDO);
$connwrite = dbconnect (write, PDO);


$ipdevice = $_SERVER['REMOTE_ADDR'];
if (isset($POST)) {
    $location ='';
}

$username = htmlentities(addslashes($_POST['name']));
$username = ucwords($username);
$dluser_email = htmlentities(addslashes($_POST['dluser_email']));
$dluser_password = addslashes($_POST['password']);
$dluser_password1 = htmlentities($dluser_password);
$password = md5 ($dluser_password);


?>