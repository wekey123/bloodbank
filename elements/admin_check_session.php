<?php
include("db.php"); 
$admin = $_SESSION['Admin']; 
if(empty($admin)){
	header('location:logout.php'); exit;
}

?>
