<?php
include("db.php"); 
if(!empty($_POST)){
@extract($_POST);
$check = mysqli_query($con,"SELECT uname FROM donor_reg WHERE uname = '$uname'");
$check2 = mysqli_num_rows($check);
	if ($uname==""  or $pass=="" or $name=="" or $mob_num=="" or $email==""){
		 $message = "All fields must be entered, hit back button and re-enter information.";
	}elseif ($check2 != 0) {
		$message = "Sorry, the username is already in use.";
	}elseif($pass != $cpass) {
		$message = "Your passwords did not match.";
	}else{
		$dob =  date('Y-m-d',strtotime($dob)); 
		$ldd =  date('Y-m-d',strtotime($ldd)); 
	 if(mysqli_query($con,"INSERT INTO donor_reg (uname, pass,name,age,gender,dob,weight,b_gp,ldd,state,city,pin_code,mob_num,e_mail,msg) VALUES('$uname','$pass','$name','$age','$gn','$dob','$weight','$bg','$ldd','$state','$city','$pc','$mob_num','$email','$msg')")){
	 header( 'Location: donor_login.php?error=1');exit;
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
<?php include 'elements/header.php'; ?>
</head>
<body>
<?php include 'elements/banner.php'; ?>
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
      <td class="cptn" colspan="4"><div align="center">DONOR REGISTRATION</div></td>
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
      <td width="145">
        <input type="password" name="pass" id="textfield2" value="<?php if(isset($pass)) echo $pass; ?>"/>      </td>
      <td width="108">Min 8 Character</td>
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
      <td class="field">Age</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="age" id="textfield7" value="<?php if(isset($age)) echo $age; ?>"/></td>
    </tr>
    <tr>
      <td class="field">Gender</td>
      <td class="field">:</td>
      <td colspan="2"><select name="gn" id="genderbox">
        <option value="">--Select--</option>
        <option value="Male" <?php if(isset($gn) && $gn == 'Male')echo 'selected="selected"'; ?>>Male</option>
        <option value="Female" <?php if(isset($gn) && $gn == 'Female')echo 'selected="selected"'; ?>>Female</option>
        </select>        </td>
    </tr>
    <tr>
      <td class="field">Date of Birth</td>
      <td class="field">:</td>
      <td><input type="text" name="dob" id="textfield9"  class="datepicker" value="<?php if(isset($dob)) echo $dob; ?>"/></td>
      <td>YY-MM-DD</td>
    </tr>
    <tr>
      <td class="field">Weight</td>
      <td class="field">:</td>
      <td><input type="text" name="weight" id="textfield10" value="<?php if(isset($weight)) echo $weight; ?>"/></td>
      <td>Kg</td>
    </tr>
    <tr>
      <td class="field">Blood Group</td>
      <td class="field">&nbsp;</td>
      <td colspan="2"><select name="bg" size="1" id="bg">
          <option value="">- - Select - -</option>
          <option value="A+" <?php if(isset($bg) && $bg == 'A+')echo 'selected="selected"'; ?>>A+</option>
          <option value="A-" <?php if(isset($bg) && $bg == 'A-')echo 'selected="selected"'; ?>>A-</option>
          <option value="B+" <?php if(isset($bg) && $bg == 'B+')echo 'selected="selected"'; ?>>B+</option>
          <option value="B-" <?php if(isset($bg) && $bg == 'B-')echo 'selected="selected"'; ?>>B-</option>
          <option value="AB+" <?php if(isset($bg) && $bg == 'AB+')echo 'selected="selected"'; ?>>AB+</option>
          <option value="AB-" <?php if(isset($bg) && $bg == 'AB-')echo 'selected="selected"'; ?>>AB-</option>
          <option value="O+" <?php if(isset($bg) && $bg == 'O+')echo 'selected="selected"'; ?>>O+</option>
          <option value="O-" <?php if(isset($bg) && $bg == 'O-')echo 'selected="selected"'; ?>>O-</option>
        </select></td>
    </tr>
    <tr>
      <td class="field">Last Donated Date</td>
      <td class="field">:</td>
      <td><input type="text" name="ldd" id="textfield12" class="datepicker" value="<?php if(isset($ldd)) echo $ldd; ?>"/></td>
      <td>YY-MM-DD</td>
    </tr>
    <tr>
      <td colspan="4" class="field">&nbsp;</td>
      </tr>
    <tr>
      <td colspan="4" class="cptn">Contact Informations</td>
      </tr>
    <tr>
      <td colspan="4" class="field">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">State</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="state" id="textfield13" value="<?php if(isset($state)) echo $state; ?>"/></td>
    </tr>
    <tr>
      <td class="field">City</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="city" id="textfield14" value="<?php if(isset($city)) echo $city; ?>"/></td>
    </tr>
    <tr>
      <td class="field">Pin Code</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="pc" id="textfield15" value="<?php if(isset($pc)) echo $pc; ?>"/></td>
    </tr>
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="mob_num" type="text" id="textfield5" value="<?php if(isset($mob_num)) echo $mob_num; ?>"/>      </td>
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
        <input type="submit" name="button" id="button" value="Submit"  onclick = "return valid()" />      </td>
    </tr>
  </table>
  </form>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br />
</div>
<?php include 'elements/footer.php'; ?>
</body>
</html>