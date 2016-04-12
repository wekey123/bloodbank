<?php
include "elements/admin_check_session.php";
if(!empty($_POST)){
	@extract($_POST);
	
 	if($subject == 1){
		$subject = 'NO MATCHES FOUND';
		$sql = "UPDATE blood_req SET status=$subject WHERE id=$p_id";
	}else if($subject == 2){
		$sql = "UPDATE blood_req SET status=$subject,donor_id=$d_id WHERE id=$p_id";
		$subject = 'DONOR AVAILABLE';
	}
	
    if (mysqli_query($con, $sql)) {
    	echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($con);
	}
	
	$headers = "From: admin@bloodbanksystem.com" . "\r\n" .
	"CC: somebodyelse@example.com";
	if(mail($to,$subject,$msg,$headers)){
	header("Location: vw_requests.php?succes=1");
	}else{
	echo "Message Sent Failure";	
	}
}
?>