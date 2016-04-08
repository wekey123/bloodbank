<?php

$user_name = "root";
$password = "";
$database = "blood";
$server = "localhost"; 
//$db_handle = mysqli_connect($server, $user_name, $password);
//$con = mysqli_select_db($db_handle,$database);

$con=mysqli_connect($server,$user_name,$password,$database);

// some code

?>