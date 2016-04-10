<?php 
include("db.php"); 
if(!empty($_POST)){
@extract($_POST);
	//echo "<pre>"; print_r($_POST);echo "</pre>"; echo $dt; exit;
	if(mysqli_query($con,"INSERT INTO contact (name, mob_num, e_mail,message)VALUES('$name','$mob','$email','$msg')")){
	 header( 'Location: contact_us.php?success=1');exit;
	}else{
	 $message = mysqli_error($con);
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

	if(document.form1.textfield4.value == ""){
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
<div class="top">&nbsp;&nbsp;Home &gt; Contact Us</div>
<br /><br /><br />
<div class="baner">E-Blood Donation Forum</div>
<br /><br /><br />
<?php include 'elements/menu.php'; ?>
</div>
</div>
<div class="content">
<?php include 'elements/leftmenu.php'; ?>
<div id="apDiv1">
<form  name="form1" method="post" action="">
  <table class="tbl_form" width="461" height="278">
    <tr>
      <td colspan="4"><div align="center" style="color:red;">
	     <?php 
	  		if(!empty($_GET['success'])){
		   		if($_GET['success'] == 1) echo 'Thank You For Contact Us.<br/>'; 
		    }
		   	if(!empty($message)){ echo $message; }
		 ?> 
       </div>
      </td>
     </tr>   
    <tr>
      <td colspan="3" class="cptn">Contact Us</td>
      </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">Name</td>
      <td class="field">:</td>
      <td>
        <input type="text" name="name"  id="textfield4"  value="<?php if(isset($name)) echo $name; ?>"/>      </td>
    </tr>
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td>
        <input type="text" name="mob"  id="textfield5"  value="<?php if(isset($mob)) echo $mob; ?>"/>      </td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td>
        <input type="text" name="email"  id="textfield6"  value="<?php if(isset($email)) echo $email; ?>"/>      </td>
    </tr>
    <tr>
      <td height="97" class="field">Message</td>
      <td class="field">:</td>
      <td>
        <textarea name="msg"  cols="30" rows="5"><?php if(isset($msg)) echo $msg; ?></textarea>      </td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;
	  
      
      </td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="right">
       <input type="submit" name="button" id="button" value="Submit" onclick="return valid();"/>      </td>
    </tr>
  </table>
  </form>
</div>
</div>
<?php include 'elements/footer.php'; ?>
</body>
</html>
