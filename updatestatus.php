<?php
include "elements/donor_check_session.php";
$d_id = $donor['id'];
if(!empty($_GET)){
	@extract($_GET);
	
 	if($status == 3){
		$subject = 'DONOR ACCEPTED';
		$sql = "UPDATE blood_req SET status=$status WHERE id=$p_id";
	}else if($status == 4){
		$sql = "UPDATE blood_req SET status=$status,donor_id=$d_id WHERE id=$p_id";
		$subject = 'DONOR REJECTED';
	}
	
    if (mysqli_query($con, $sql)) {
    	echo "Record updated successfully";
		header('Location: donor_vw_req.php?success=1');
	} else {
		echo "Error updating record: " . mysqli_error($con);
	}
exit;	
	$headers = "From: admin@bloodbanksystem.com" . "\r\n" .
	"CC: somebodyelse@example.com";
	if(mail($to,$subject,$msg,$headers)){
	header("Location: vw_requests.php?succes=1");
	}else{
	echo "Message Sent Failure";	
	}
}
?>