<?php 
include "elements/admin_check_session.php";
if(!empty($_POST)){
	@extract($_POST);
	$result = mysqli_query($con,"SELECT * FROM donor_reg WHERE b_gp like '%$bg%' and city like '%$city%'  ORDER BY name");
	//print_r($result); exit;
	if(mysqli_num_rows($result) == 0)
	{
		$message = 'Search Not available for the criteria';
	}
}else{
	header("Location: vw_requests.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum | Admin Profile</title>
<link href="Style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="header">
<div class="menu"> <div class="top">&nbsp;&nbsp;Home &gt; Find Donors</div>
<br /><br /><br /><br /><br /><br />
<?php include 'elements/admin_menu.php'; ?>
</div>
</div>
<div class="content">
<?php //include 'elements/leftmenu.php';?>     <br/>
	<h2 style="text-align:center;">Donor List</h2> <br/> <br/>
    <h4 style="text-align:center; color:red;"><?php if(isset($message)){ echo $message; } ?></h4> <br/> <br/>
    <center>
    <table style="width:80%; text-align:center;" border="1">
    <tr ><td>Sno</td><td>Donor Id</td><td> Name</td><td>Age</td><td>Gender</td><td>Blood Group</td><td>Last Donated Date</td><td>State</td><td>Location</td><td>Contact Number</td><td>E-Mail</td></tr> 
	<?php if(mysqli_num_rows($result) > 0){
          $i =1;
          while($row=mysqli_fetch_array($result))
          {
              echo '<tr>';
			  echo '<td>'.$i.'</td>' ;
			  echo '<td>'.$row['id'].'</td>' ;
              echo '<td>'.$row['name'].'</td>' ;
              echo '<td>'.$row['age'].'</td>' ;
              echo '<td>'.$row['gender'] .'</td>';
              echo '<td>'.$row['b_gp'].'</td>' ;
              echo '<td>'.$row['ldd'].'</td>' ;
              echo '<td>'.$row['state'].'</td>' ;
              echo '<td>'.$row['city'] .'</td>';
              echo '<td>'.$row['mob_num'].'</td>' ;
              echo '<td>'.$row['e_mail'].'</td>' ;
              echo '</tr>';
			  $i++;
          }
		}
    ?>
    </table>
	</center>
    <br/><br/>
    
    <center>
    <form action="mail.php" method="post"/>
    <table class="tbl_form"  width="461">
    <tr>
       <td class="cptn" colspan="4"><div align="center">E Mail Donor</div></td>
    </tr>
    <?php if(mysqli_num_rows($result) > 0){ ?> 
    <tr>
      <td width="155" height="31" class="field">Donor Id</td>
      <td width="33" class="field">:</td>
      <td colspan="2"><input type="text" name="d_id" value=""/></td>
    </tr>
    <?php } ?>
    <tr>
      <td width="155" height="31" class="field">To</td>
      <td width="33" class="field">:</td>
      <td colspan="2"><input type="text" name="to" value=""/><input type="hidden" name="p_id" value="<?php echo $p_id; ?>"/></td>
    </tr>
    <tr>
      <td width="155" height="31" class="field">Subject</td>
      <td width="33" class="field">:</td>
      <td colspan="2">
      <select name="subject">
      <option value="1">NO MATCHES FOUND</option>
      <option value="2">DONOR AVAILABLE</option>
      </select>
	  </td>
    </tr>
    <tr>
      <td width="155" height="31" class="field">Message</td>
      <td width="33" class="field">:</td>
      <td colspan="2"><textarea name="msg"  cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
      <td width="155" height="31" class="field"></td>
      <td width="33" class="field"><input type="submit" name="submit" value="SEND"/></td>
      <td colspan="2"></td>
    </tr>
    </table>
    </form>
	</center>
</div>
<?php include 'elements/footer.php';?>  
</body>
</html>
