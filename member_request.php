<?php 
include "elements/member_check_session.php";
$m_id = $member['id'];
$result=mysqli_query($con,"SELECT * FROM blood_req where member_id = $m_id");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum | Request List</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="header">
<div class="menu"> <div class="top">&nbsp;&nbsp;Home &gt; <a href="member.php">Member Profile</a> &gt;Request List</div>
<br /><br /><br /><br /><br /><br />
<?php include 'elements/member_menu.php'; ?>
</div>
</div>
<div class="content">
<br/>  
	<h2 style="text-align:center;">Request List</h2>
    <h4 style="text-align:center; color:red;"><?php if(isset($_GET['error']) && $_GET['error'] == 1){ echo 'Not allow to view Donor Information'; } ?></h4> <br/> <br/>
        <center>
    <table style="width:80%; text-align:center;" border="1">
    <tr ><td>Sno</td><td> Patient Name</td><td>Type of Disease</td><td>Docter Name</td><td>When Required</td><td>Contact Number</td><td>Blood Group</td><td>Quantity</td><td>Required City</td><td>Contact Person Name</td><td>Hospital/Address</td><td>Posted Date</td><td>Status</td><td>Donor Info</td></tr>
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
			  if($row['status'] == 0){ echo '<td style="color:red;">Request Sent</td>';
			  }else if($row['status'] == 1){ echo '<td style="color:red;">No BG Matches</td>';
			  }else if($row['status'] == 2){ echo '<td style="color:red;">Admin Approval</td>';
			  }else if($row['status'] == 3){ echo '<td style="color:red;">Donor Accept</td>';
			  }else if($row['status'] == 4){ echo '<td style="color:red;">Donor Reject</td>';}
			  if($row['status'] == 3 && $row['donor_id'] != 0){  $donor_id = $row['donor_id'];  $p_id = $row['id']; 
			  echo "<td><a href='/viewdonor.php?pid=$p_id&id=$donor_id'>View Donor info</a></td>";}else{ echo '<td>NA</td>'; }
              echo '</tr>';
			  $i++;
          }
    ?>
    </table>
	</center>
    <br/><br/>
</div>
<?php include 'elements/footer.php';?>  
</body>
</html>