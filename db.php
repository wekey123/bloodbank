<?php
session_start();
ob_start();
$user_name = "root";
$password = "";
$database = "blood";
$server = "localhost"; 
$ADMIN_TO_MAIL = "vickyece89@gmail.com";
$con=mysqli_connect($server,$user_name,$password,$database);
?>