<?php
include("db.php"); 
$donor = $_SESSION['Donor']; 
if(empty($donor)){
	header('location:logout.php'); exit;
}
?>
