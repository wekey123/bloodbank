<?php
session_start();
$user_name = "root";
$password = "";
$database = "blood";
$server = "localhost"; 
$con=mysqli_connect($server,$user_name,$password,$database);
?>