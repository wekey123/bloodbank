<?php 
include "elements/admin_check_session.php";
$result=mysqli_query($con,"SELECT * FROM member_reg");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum | View Members</title>
<link href="Style.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="header">
<div class="menu"> <div class="top">&nbsp;&nbsp;Home &gt; <a href="Admin.php">Admin Area</a> &gt;View Members</div>
<br /><br /><br /><br /><br /><br />
<?php include 'elements/admin_menu.php'; ?>
</div>
</div>
<div class="content">
<?php //include 'elements/leftmenu.php';?>   <br/>  
	<h2 style="text-align:center;">Member List</h2> <br/> <br/>
    <center>
    <table style="width:80%; text-align:center;" border="1">
    <tr ><td>Sno</td><td> Name</td><td>Contact Number</td><td>Email</td><td>Message</td></tr>
    <?php $i =1;
          while($row=mysqli_fetch_array($result))
          {
              echo '<tr>';
			  echo '<td>'.$i.'</td>' ;
              echo '<td>'.$row['name'].'</td>' ;
              echo '<td>'.$row['mob_num'].'</td>' ;
              echo '<td>'.$row['e_mail'] .'</td>';
              echo '<td>'.$row['msg'].'</td>' ;
              echo '</tr>';
			  $i++;
          }
    ?>
    </table>
	</center><br/><br/>
</div>
<?php include 'elements/footer.php';?>  
</body>
</html>
