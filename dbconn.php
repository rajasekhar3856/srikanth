<?php
error_reporting(0);
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "codetest";
// Create connection
$dbconn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if ($dbconn->connect_error) {
    die("Connection failed: " . $dbconn->connect_error);
} 
//echo "Connected successfully";
?>
