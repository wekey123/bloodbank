<?php
include("db.php"); 
$donor = $_SESSION['Donor']; 
if(empty($donor)){
	header('location:logout.php'); exit;
}else if(!empty($donor)){
	header('location:donor.php'); exit;
}
?>
