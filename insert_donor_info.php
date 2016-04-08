<?php
include("db.php"); 
@extract($_POST);
$check = mysqli_query($con,"SELECT uname FROM member_reg WHERE uname = '$uname'");
$check2 = mysqli_num_rows($check);
if ($uname==""  or $pass=="" or $name=="" or $mob_num=="" or $email==""){
	echo "All fields must be entered, hit back button and re-enter information";
}elseif ($check2 != 0) {
	die('Sorry, the username '.$uname.' is already in use.');
}elseif($pass != $cpass) {
	die('Your passwords did not match. ');
}else{
 mysqli_query($con,"INSERT INTO donor_reg (uname, pass,name,age,gender,dob,weight,b_gp,ldd,state,city,pin_code,mob_num,e_mail,msg) VALUES('$uname','$pass','$name','$age','$gn','$dob','$weight','$bg','$ldd','$state','$city','$pc','$mob_num','$email','$msg')") or die(mysqli_error($con));

 echo "Your message has been received";
 header( 'Location: donor_login.php' ) ;
}
?>
