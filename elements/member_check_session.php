<?php
include("db.php"); 
$member = $_SESSION['Member']; 
if(empty($member)){
	header('location:logout.php'); exit;
}else if(!empty($member)){
	header('location:member.php'); exit;
}
?>
