<?php 
include "elements/member_check_session.php";
if(isset($_GET['pid'])  && isset($_GET['id'])){
	$p_id = $_GET['pid'];
	$d_id = $_GET['id'];
	$m_id = $member['id'];
	$sql = "SELECT * FROM blood_req LEFT JOIN donor_reg ON blood_req.donor_id=donor_reg.id WHERE blood_req.id = $p_id AND blood_req.member_id = $m_id AND donor_reg.id = $d_id";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
}else{
 header('Location: member_request.php?error=1');	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum | View Donor Information</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="header">
<div class="menu"> <div class="top">&nbsp;&nbsp;Home &gt; <a href="member.php">Member Profile</a> &gt;View Donor Info</div>
<br /><br /><br /><br /><br /><br />
<?php include 'elements/member_menu.php'; ?>
</div>
</div>
<div class="content">
<br/>  
	<h2 style="text-align:center;">Request List</h2> <br/> <br/>
        <center>
    <table class="tbl_form"  width="461">
    <tr>
       <td class="cptn" colspan="4"><div align="center">DONOR INFORMATION</div></td>
    </tr>
    <?php if(isset($row)){ ?>
    <tr>
      <td width="155" height="31" class="field">Donor Name</td>
      <td width="33" class="field">:</td>
      <td colspan="2"><?php echo $row['name']; ?></td>
    </tr>
    <tr>
      <td width="155" height="31" class="field">Donor Age</td>
      <td width="33" class="field">:</td>
      <td colspan="2"><?php echo $row['age']; ?></td>
    </tr>
    <tr>
      <td width="155" height="31" class="field">Donor Gender</td>
      <td width="33" class="field">:</td>
      <td colspan="2"><?php echo $row['gender']; ?></td>
    </tr>
    <tr>
      <td width="155" height="31" class="field">Donor Blood Group</td>
      <td width="33" class="field">:</td>
      <td colspan="2"><?php echo $row['b_gp']; ?></td>
    </tr>
    <tr>
      <td width="155" height="31" class="field">Donor Mobile Number</td>
      <td width="33" class="field">:</td>
      <td colspan="2"><?php echo $row['mob_num']; ?></td>
    </tr>
    <tr>
      <td width="155" height="31" class="field">Donor Email</td>
      <td width="33" class="field">:</td>
      <td colspan="2"><?php echo $row['e_mail']; ?></td>
    </tr>
    <tr>
      <td width="155" height="31" class="field">Donor City</td>
      <td width="33" class="field">:</td>
      <td colspan="2"><?php echo $row['city']; ?></td>
    </tr>
    <tr>
      <td width="155" height="31" class="field">Donor State</td>
      <td width="33" class="field">:</td>
      <td colspan="2"><?php echo $row['state']; ?></td>
    </tr>
    <?php } ?>
  </table>
	</center>
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div>
<?php include 'elements/footer.php';?>  
</body>
</html>