<?php 
include "elements/donor_check_session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum | Donor Profile</title>
<link href="Style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="header">
<div class="menu"> <div class="top">&nbsp;&nbsp;<a href="index.php">Home</a> &gt; Donor Profile</div>
  <br /><br />
  <h1 class="h" align="right">E-Blood Donation Forum&nbsp;&nbsp;</h1>
<br />
     <?php include 'elements/donor_menu.php'; ?>                   
  </div>
</div>
<div class="content">
<?php include 'elements/leftmenu.php'; ?> <br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="apDiv1">
<form id="form1" name="form1" method="post" action="">
  <table class="tbl_form" width="461" height="401">
    <tr>      </tr>
    <tr>
      <td colspan="3" class="cptn">
	  <?php 
	  $result=mysqli_query($con,"SELECT * FROM donor_reg WHERE id=".$donor['id']);
	  $row=mysqli_fetch_array($result);

	  echo ' Hai,  &nbsp;&nbsp;'.$row['name'] ;
	
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
      <td class="field">Age</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['age'] ;  
	  
	  ?></td>
    </tr>
    <tr>
      <td class="field">Gender</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['gender'] ;  
	  
	  ?></td>
    </tr>
    <tr>
      <td class="field">Date of Birth</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['dob'] ;  
	  
	  ?></td>
    </tr>
    <tr>
      <td class="field">Weight</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['weight'] ;  
	  
	  ?></td>
    </tr>
    <tr>
      <td class="field">Blood Group</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;
        <?php
	   echo ''.$row['b_gp'] ;  
	  
	  ?>
        &nbsp;</td>
    </tr>
    <tr>
      <td class="field">Last Donated Date</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['ldd'] ;  
	  
	  ?></td>
    </tr>
    <tr>
      <td class="field">&nbsp;</td>
      <td class="field">&nbsp;</td>
      <td class="data">&nbsp;</td>
    </tr>
    <tr>
      <td class="field">State</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['state'] ;  
	  
	  ?></td>
    </tr>
    <tr>
      <td class="field">City</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['city'] ;  
	  
	  ?></td>
    </tr>
    <tr>
      <td class="field">Pin Code</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['pin_code'] ;  
	  
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
	  ?>      </td>
    </tr>
    <tr>
      <td class="field">&nbsp;</td>
      <td class="field">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>    </tr>
    <tr>
      
      </tr>
   
  </table>
  </form>
</div>
</div>
<?php include 'elements/footer.php'; ?>
</body>
</html>