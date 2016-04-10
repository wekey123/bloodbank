<?php
include "elements/member_check_session.php";
if(!empty($_POST)){
@extract($_POST);
	$whn_req =  date('Y-m-d',strtotime($whn_req)); 
	$dt =  date('Y-m-d',time()); 
	$mid = $member['id'];
	//echo "<pre>"; print_r($_POST);echo "</pre>"; echo $dt; exit;
	if(mysqli_query($con,"INSERT INTO blood_req(member_id,pat_name,typ_dis,doc_name,whn_req,cont_num,blood_grp,quan,req_city,cont_per_name,hosp_add,dt)
VALUES
($mid,'$pat_name','$typ_dis','$doc_name','$whn_req','$cont_num','$bg','$quan','$req_city','$cont_per_name','$hosp_add','$dt')")){
	header( 'Location: request_blood.php?success=1');exit;
	}else{
	 $message = mysqli_error($con);
	}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum | Member Profile</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script>
  $(function() {
	
	$('.datepicker').datepicker({ dateFormat: 'dd-mm-yy' });

  });
</script>
<script>
function valid()
{
   if(document.form1.textfield.value == "")
   {
      alert("Please Enter Patient's Name");
	  document.form1.textfield.focus();
	  return false;
   }else if(document.form1.textfield2.value == "")
   {
      alert("Please Enter Type of Disease");
	  document.form1.textfield2.focus();
	  return false;
   }else if(document.form1.textfield3.value == "")
   {
      alert("Please Enter Doctor's Name");
	  document.form1.textfield3.focus();
	  return false;
   }else if(document.form1.textfield4.value == "")
   {
      alert("Please Enter When Required");
	  document.form1.textfield4.focus();
	  return false;
   }else if(document.form1.textfield5.value == "")
   {
      alert("Please Enter Contact Number");
	  document.form1.textfield5.focus();
	  return false;
   }else if(document.form1.textfield7.value == "")
   {
      alert("Please Enter Quantity");
	  document.form1.textfield7.focus();
	  return false;
   }else if(document.form1.textfield8.value == "")
   {
      alert("Please Enter City");
	  document.form1.textfield8.focus();
	  return false;
   }else if(document.form1.textfield6.value == "")
   {
      alert("Please Enter Contact Person Name");
	  document.form1.textfield6.focus();
	  return false;
   }else if(document.form1.blood_gp.value == "")
   {
      alert("Please Select Blood Group");
	  document.form1.blood_gp.focus();
	  return false;
   }else{
	return true;
   }
}

</script>
</head>

<body>
<div class="header">
<div class="menu"> <div class="top">&nbsp;&nbsp;Home &gt; <a href="member.php">Member Profile</a> &gt; Request Blood</div>
<br /><br /><br /><br /><br /><br />
 <?php include 'elements/member_menu.php'; ?>
  </div>
</div>
<div class="content">
 <center>
 <form id="form1" name="form1" method="post" action="">
  <table class="tbl_form" width="461" height="431">
   <tr>
      <td colspan="4"><div align="center" style="color:red;">
	     <?php 
	  		if(!empty($_GET['success'])){
		   		if($_GET['success'] == 1) echo 'Your Request Has sent to Admin.'; 
		    }
		   	if(!empty($message)){ echo $message; }
		 ?> 
       </div>
      </td>
    </tr>
    <tr>
      <td class="cptn" colspan="4"> Request for Blood</td>
      </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td width="156" height="31" class="field">Patient's Name</td>
      <td width="32" class="field">:</td>
      <td colspan="2">
        <input type="text" name="pat_name" id="textfield"  value="<?php if(isset($pt_name)) echo $pt_name; ?>"/>      </td>
    </tr>
    <tr>
      <td class="field">Type of Disease</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="typ_dis" id="textfield2"  value="<?php if(isset($pt_name)) echo $typ_dis; ?>"/>      </td>
    </tr>
    <tr>
      <td class="field">Doctor's Name</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="doc_name" id="textfield3"  value="<?php if(isset($doc_name)) echo $doc_name; ?>"/>      </td>
    </tr>
    
    <tr>
      <td class="field">When Required</td>
      <td class="field">:</td>
      <td width="144">
        <input type="text" class="datepicker" name="whn_req" id="textfield4"  value="<?php if(isset($whn_req)) echo $whn_req; ?>"/>      </td>
      <td width="109">YY-MM-DD</td>
    </tr>
    <tr>
      <td class="field">Contact Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="cont_num" type="text" id="textfield5" value="91<?php if(isset($cont_num)) echo $cont_num; ?>" />   </td>
    </tr>
    <tr>
      <td class="field">Blood Group</td>
      <td class="field">:</td>
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
      <td class="field">Quantity</td>
      <td class="field">:</td>
      <td><input type="text" name="quan" id="textfield7" value="<?php if(isset($quan)) echo $quan; ?>"/></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="field">City</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="req_city" id="textfield8" value="<?php if(isset($req_city)) echo $req_city; ?>"/></td>
    </tr>
    <tr>
      <td class="field">Contact Person Name</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="cont_per_name" id="textfield6" value="<?php if(isset($cont_per_name)) echo $cont_per_name; ?>"/>      </td>
    </tr>
    <tr>
      <td height="97" class="field"><div align="center">Hospital Name/Address</div></td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea name="hosp_add" id="textarea" cols="30" rows="5"><?php if(isset($textarea)) echo $textarea; ?></textarea>      </td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" align="right">
        <input type="submit" name="button" id="button" value="Submit" onclick = "return valid()"  />      </td>
    </tr>
  </table>
  </form> <br/><br/>
  </center>
</div>
<?php include 'elements/footer.php';?>
</body>
</html>
