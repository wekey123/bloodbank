<div id="tabsE">

<ul>                                     <!-- CSS Tabs -->
    <li><a href="member.php"><span>Profile</span></a></li>
    <li><a href="request_blood.php"><span>Request Form</span></a></li>
    <li><a href="member_request.php"><span>Request List</span></a></li>
    <!--<li><a href="contact_us.php"><span>Contact Us</span></a></li>-->
</ul>
 
<?php if(!empty($member)){ ?>
    <ul style="float:right;">            <!-- CSS Tabs -->
    <li><a href="logout.php"><span>Logout</span></a></li>
    </ul>
<?php } ?>
    
</div>
