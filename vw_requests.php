<?php 
include "elements/admin_check_session.php";
if(!empty($_POST)){
	@extract($_POST);
	$result = mysqli_query($con,"SELECT * FROM blood_req WHERE blood_grp like '%$bg%' and req_city like '%$city%'  ORDER BY whn_req");
	//print_r($result); exit;
	if(mysqli_num_rows($result) == 0)
	{
		$message = 'Search Not available for the criteria';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum | View Request</title>
<link href="Style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="header">
<div class="menu"> <div class="top">&nbsp;&nbsp;Home &gt; <a href="Admin.php">Admin Area</a> &gt;View Request</div>
<br /><br /><br /><br /><br /><br />
<?php include 'elements/admin_menu.php'; ?>
</div>
</div>
<div class="content">    <br/>
	<h2 style="text-align:center;">Blood Request Search</h2> <br/> <br/>
    <center>
    <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table width="586" height="110" class="tbl_form" align="center">
    <tr>
      <td colspan="4">
      <div align="center" style="color:red;">
	     <?php
		   	if(!empty($message)){ echo $message; }
		 ?> 
       </div>
      </td>
    </tr>
    <tr>
      <td colspan="8" class="cptn">Search Blood Requests</td>
      </tr>
    <tr>
      <td colspan="8">&nbsp;</td>
      </tr>
    <tr>
      
      <td class="field"> Blood Group</td>
      <td class="field">&nbsp;</td>
      <td class="field"><select name="bg" size="1" id="select">
        <option>- - Select - -</option>
        <option>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>AB+</option>
        <option>AB-</option>
        <option>O+</option>
        <option>O-</option>
      </select></td>
      <td class="field">City</td>
      <td class="field">&nbsp;</td>
      <td><span class="field">
        <input name="city" type="text" id="textfield4" size="35" />
      </span></td>
      <td><input type="submit" name="button" id="button" value="Search" /></td>
    </tr>
    
    <tr>    </tr>
    <tr>
      <td colspan="8">&nbsp;</td>
      </tr>
  </table>
  </form>
    </center>
    <?php if(!empty($_POST)&& mysqli_num_rows($result) > 0){ ?>
    <center>
    <table style="width:80%; text-align:center;" border="1">
    <tr ><td>Sno</td><td> Patient Name</td><td>Type of Disease</td><td>Docter Name</td><td>When Required</td><td>Contact Number</td><td>Blood Group</td><td>Quantity</td><td>Required City</td><td>Contact Person Name</td><td>Hospital/Address</td><td>Posted Date</td></tr>
    <?php $i =1;
          while($row=mysqli_fetch_array($result))
          {
              echo '<tr>';
			  echo '<td>'.$i.'</td>' ;
              echo '<td>'.$row['pat_name'].'</td>' ;
              echo '<td>'.$row['typ_dis'].'</td>' ;
              echo '<td>'.$row['doc_name'] .'</td>';
              echo '<td>'.$row['whn_req'].'</td>' ;
			  echo '<td>'.$row['cont_num'].'</td>' ;
              echo '<td>'.$row['blood_grp'].'</td>' ;
              echo '<td>'.$row['quan'] .'</td>';
              echo '<td>'.$row['req_city'].'</td>' ;
			  echo '<td>'.$row['cont_per_name'].'</td>' ;
              echo '<td>'.$row['hosp_add'].'</td>' ;
              echo '<td>'.$row['dt'] .'</td>';
              echo '</tr>';
			  $i++;
          }
    ?>
    </table>
	</center>
    <br/><br/>
    <?php } ?>
</div>
<?php include 'elements/footer.php';?>  
</body>
</html>