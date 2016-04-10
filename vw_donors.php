<?php 
include "elements/admin_check_session.php";
$result=mysqli_query($con,"SELECT * FROM donor_reg");
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
<div class="menu"> <div class="top">&nbsp;&nbsp;Home &gt; <a href="Admin.php">Admin Area </a>&gt; View Donors</div>
<br /><br /><br /><br /><br /><br />
<?php include 'elements/admin_menu.php'; ?>
</div>
</div>
<div class="content">
<?php //include 'elements/leftmenu.php';?>    

	<h2 style="text-align:center;">Donor List</h2>
    <center>
    <table style="width:80%; text-align:center;" border="1">
    <tr ><td>Sno</td><td> Name</td><td>Age</td><td>Gender</td><td>Blood Group</td><td>Last Donated Date</td><td>State</td><td>Location</td><td>Contact Number</td><td>E-Mail</td></tr>
    <?php $i =1;
          while($row=mysqli_fetch_array($result))
          {
              echo '<tr>';
			  echo '<td>'.$i.'</td>' ;
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
    ?>
    </table>
	</center>
</div>
<?php include 'elements/footer.php';?>  
</body>
</html>
