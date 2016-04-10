<?php
include("db.php"); 
$admin = $_SESSION['Admin']; 
if(empty($admin)){
	header('location:logout.php'); exit;
}else if(!empty($admin)){
	header('location:admin.php'); exit;
}
?>
