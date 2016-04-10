<?php
include("db.php"); 
if(!empty($_POST)){
@extract($_POST);
$check = mysqli_query($con,"SELECT uname FROM member_reg WHERE uname = '$uname'");
$check2 = mysqli_num_rows($check);
	if ($uname==""  or $pass=="" or $name=="" or $mob_num=="" or $email==""){
		 $message = "All fields must be entered, hit back button and re-enter information.";
	}elseif ($check2 != 0) {
		$message = "Sorry, the username is already in use.";
	}elseif($pass != $cpass) {
		$message = "Your passwords did not match.";
	}else{
	 if(mysqli_query($con,"INSERT INTO member_reg (uname, pass,name,mob_num,e_mail,msg) VALUES ('$uname','$pass','$name','$mob_num','$email','$msg')")){
	 header( 'Location: member_login.php?error=1');exit;
	 }else{
		 $message = mysqli_error($con);
	 }
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
<script>
function valid()
{
	var passwordvalue = document.form1.textfield2.value;
	var cpassword = document.form1.textfield3.value;
	
   if(document.form1.textfield.value == "")
   {
      alert("Please Enter Usernmae");
	  document.form1.textfield.focus();
	  return false;
   }else if(passwordvalue == ""){
      alert("Please Enter Password");
	  document.form1.textfield2.focus();
	  return false;
   }else if(passwordvalue.length < 8){   
      alert("Please Enter Password MIN 8 Characters Long");
	  document.form1.textfield2.focus();
	  return false;
   }else if(cpassword == ""){
      alert("Please Enter Confirm Password");
	  document.form1.textfield3.focus();
	  return false;
   }else if(passwordvalue != cpassword){
      alert("Please enter the Password and Confirm password be the same");
	  document.form1.textfield3.focus();
	  return false;
   }else if(document.form1.textfield4.value == ""){
      alert("Please Enter Name");
	  document.form1.textfield4.focus();
	  return false;
   }else if(document.form1.textfield5.value == ""){
      alert("Please Enter Mobile Number");
	  document.form1.textfield5.focus();
	  return false;
   }else if(document.form1.textfield6.value == ""){
      alert("Please Enter Email ID");
	  document.form1.textfield6.focus();
	  return false;
   }else{
	return true;
   }
}

</script>
</head>
<body>
<div class="header">
<div class="menu"> 
<div class="top">&nbsp;&nbsp;Home &gt; Member Registration</div>
<br /><br /><br />
<div class="baner">E-Blood Donation Forum</div>
<br /><br /><br />
<?php include 'elements/menu.php'; ?>
</div>
</div>
<div class="content">
<?php include 'elements/leftmenu.php'; ?>
<div id="apDiv1">
<form id="form1" name="form1" method="post" action="">
  <table class="tbl_form" width="461" height="431">
 	 <tr>
      <td colspan="4"><div align="center" style="color:red;">
	  <?php if(!empty($message)){ echo $message; } ?> </div>
      </td>
    </tr>
    <tr>
      <td class="cptn" colspan="4"><div align="center">MEMBER REGISTRATION</div></td>
      </tr>
    <tr>
      <td class="cptn" colspan="4">Login Informations </td>
    </tr>
    <tr>
    
      <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
      <td width="155" height="31" class="field">User Name</td>
      <td width="33" class="field">:</td>
      <td colspan="2">
        <input type="text" name="uname" id="textfield" value="<?php if(isset($uname)) echo $uname; ?>"/>      </td>
    </tr>
    <tr>
      <td class="field">Password</td>
      <td class="field">:</td>
      <td width="144">
        <input type="password" name="pass" id="textfield2" value="<?php if(isset($pass)) echo $pass; ?>"/>      </td>
      <td width="109">Min 8 Character</td>
    </tr>
    <tr>
      <td class="field">Confirm Password</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="password" name="cpass" id="textfield3" value="<?php if(isset($cpass)) echo $cpass; ?>"/>      </td>
    </tr>
    <tr>
      <td colspan="4" >&nbsp;</td>
      </tr>
    <tr>
      <td colspan="4" class="cptn">Basic Informations</td>
      </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">Name</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="name" id="textfield4" value="<?php if(isset($name)) echo $name; ?>"/>      </td>
    </tr>
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="mob_num" type="text" id="textfield5" value="91<?php if(isset($mob_num)) echo $mob_num; ?>" />      </td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="email" id="textfield6" value="<?php if(isset($email)) echo $email; ?>"/>      </td>
    </tr>
    <tr>
      <td height="97" class="field">Message</td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea name="msg" id="textarea" cols="30" rows="5"><?php if(isset($msg)) echo $msg; ?></textarea>      </td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" align="right">
        <input type="submit" name="button" id="button" value="Submit" onclick="return valid();"/>      </td>
    </tr>
  </table>
  </form>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div>
<?php include 'elements/footer.php'; ?>
</body>
</html>