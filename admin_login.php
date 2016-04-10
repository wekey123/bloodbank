<?php
include("elements/session_presents.php"); 
if(!empty($_POST)){
	@extract($_POST);
	if($uname=='admin' && $pass=='admin')
	{
	$_SESSION['Admin']['id'] = 1;
	$_SESSION['Admin']['uname'] = $uname;
	$_SESSION['Admin']['name'] = $pass;
	header ('location: admin.php'); exit;
	}else{
		$message = 'Username or Password is Wrong';
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
  <table width="461" height="179" class="tbl_form">
    <tr>
      <td colspan="4"><div align="center" style="color:red;">
	     <?php 
		   	if(!empty($message)){ echo $message; }
		 ?> 
       </div>
      </td>
    </tr>
    <tr>
      <td colspan="3" class="cptn">Admin Login</td>
      </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">User Name</td>
      <td class="field">:</td>
      <td>
        <div align="center">
          <input name="uname" type="text" id="textfield4" size="35" value="<?php if(isset($uname)) echo $uname; ?>"/>      
        </div></td>
    </tr>
    <tr>
      <td class="field">Password</td>
      <td class="field">:</td>
      <td>
        <div align="center">
          <input name="pass" type="password" id="textfield5" size="35" />      
        </div></td>
    </tr>
    <tr>
      
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="right">
        <input type="submit" name="button" id="button" value="Submit" />      </td>
    </tr>
  </table>
  </form>
</div>
<br /><br /><br /><br /><br />
</div>
<?php include 'elements/rightmenu.php'; ?>
<?php include 'elements/footer.php'; ?>
</body>
</html>