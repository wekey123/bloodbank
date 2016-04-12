<?php
include "elements/donor_check_session.php";
$d_id = $donor['id'];
if(!empty($_GET)){
	@extract($_GET);
 	if($status == 3){
		$subject = 'DONOR ACCEPTED - Donor Id : '.$d_id ;
		$sql = "UPDATE blood_req SET status=$status WHERE id=$p_id";
		$msg ='I am ready to donate blood.';
	}else if($status == 4){
		$sql = "UPDATE blood_req SET status=$status,donor_id=$d_id WHERE id=$p_id";
		$subject = 'DONOR REJECTED - Donor Id : '.$d_id;
		$msg ='Sorry, I already donate blood for this month.';
	}
 
    if (mysqli_query($con, $sql)) {
    	echo "Record updated successfully";
	} else {
		echo "Error updating record: " . mysqli_error($con);exit;
	}
	///$ADMIN_TO_MAIL is defined in db.php
	$headers = "From: Donor@bloodbanksystem.com" . "\r\n" .
	"CC: somebodyelse@example.com";
	if(mail($ADMIN_TO_MAIL,$subject,$msg,$headers)){
	  header('Location: donor_vw_req.php?success=1'); exit;
	}else{
	echo "Message Sent Failure";	 exit;
	}
	 ob_end_clean();
}
?>