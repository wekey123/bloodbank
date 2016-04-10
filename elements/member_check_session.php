<?php
include("db.php"); 
$member = $_SESSION['Member']; 
if(empty($member)){
	header('location:logout.php'); exit;
}?>
