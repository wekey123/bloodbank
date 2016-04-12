<?php 
include "elements/donor_check_session.php";
$d_id = $donor['id'];
$result = mysqli_query($con,"SELECT * FROM blood_req WHERE donor_id = $d_id ORDER BY whn_req DESC");	

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
<div class="menu"> <div class="top">&nbsp;&nbsp;<a href="index.php">Home</a> &gt; View Request</div>
  <br /><br />
  <h1 class="h" align="center">E-Blood Donation Forum&nbsp;&nbsp;</h1>
<br />
     <?php include 'elements/donor_menu.php'; ?>                   
  </div>
</div>
<div class="content">    <br/>
	<h2 style="text-align:center;">View Request</h2> <br/> <br/>
    <center>
    <table style="width:80%; text-align:center;" border="1">
    <tr ><td>Sno</td><td> Patient Name</td><td>Type of Disease</td><td>Docter Name</td><td>When Required</td><td>Contact Number</td><td>Blood Group</td><td>Quantity</td><td>Required City</td><td>Contact Person Name</td><td>Hospital/Address</td><td>Posted Date</td><td>Status</td></tr>
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
			  if($row['status'] == 2){$p_id = $row['id'];
	  
			   echo '<td style="color:red;"><a href="updatestatus.php?status=3&p_id='.$p_id.'"><button>Accept</button></a> <br/><br/>
			    <a href="updatestatus.php?status=4&p_id='.$p_id.'"><button>Reject</button></a></td>';
			  }else if($row['status'] == 3){ echo '<td style="color:red;">You Accept</td>';
			  }else if($row['status'] == 4){ echo '<td style="color:red;">You Reject</td>';
			  }else{ echo '<td style="color:red;">NA</td>'; }
              echo '</tr>';
			  $i++;
          }
    ?>
    </table>
	</center>
    <br/><br/>
    <?php //} ?>
</div>
<?php include 'elements/footer.php';?>  
</body>
</html>