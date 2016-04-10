<?php 
include "elements/member_check_session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum | Member Profile</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="header">
<div class="menu"> <div class="top">&nbsp;&nbsp;<a href="index.php">Home</a> &gt; Member Profile</div>
<br /><br /><br /><br /><br /><br />
<?php include 'elements/member_menu.php'; ?>
</div>
</div>
<div class="content">
<center>
<form id="form1" name="form1" method="post" action="">
  <table class="tbl_form" width="461" height="160">
    <tr>      </tr>
    <tr>
      <td colspan="3" class="cptn">
	  <?php 
	  $result=mysqli_query($con,"SELECT * FROM member_reg WHERE id=".$member['id']);
	  while($row=mysqli_fetch_array($result))
	  {
	  echo 'Welcome,  &nbsp;&nbsp;'.$row['name'] ;
	
	  ?>      </td>
      </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td class="field" width="200">Name</td>
      <td class="field" width="5">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['name'] ;  
	  
	  ?></td>
    </tr>
    
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['mob_num'] ;  
	  
	  ?></td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['e_mail'] ;  
	  }
	  ?>      </td>
    </tr>
    <tr>
      <td class="field">&nbsp;</td>
      <td class="field">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>    </tr>
    <tr>      </tr>
  </table>
  </form>
</center><br/><br/>
</div>
<?php include 'elements/footer.php'; ?>
</body>
</html>
