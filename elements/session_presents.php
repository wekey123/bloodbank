<?php
include("db.php");
if(!empty($_SESSION['Admin'])){
	header('location:admin.php');  exit;
}else if(!empty($_SESSION['Member'])){
	header('location:member.php'); exit;
}else if(!empty($_SESSION['Donor'])){
	header('location:donor.php');  exit;
}
?>