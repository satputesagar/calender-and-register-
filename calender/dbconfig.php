<?php 
// Database configuration 
// $dbHost     = "localhost"; 
// $dbUsername = "root"; 
// $dbPassword = "  "; 
// $dbName     = "calender"; 
 
// Create database connection 
$db =  mysqli_connect('localhost', 'root', '', 'calender');
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}