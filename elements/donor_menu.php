<div id="tabsE">

    <ul>                                      <!-- CSS Tabs -->
    <li><a href="donor.php"><span>Profile</span></a></li>
    <li><a href="donor_vw_req.php"><span>View Requests</span></a></li>
    <li><a href="don_response.php"><span>Response</span></a></li>
    <li><a href="contact_us.php"><span>Contact Us</span></a></li>
    </ul>
    
    <?php if(!empty($donor)){ ?>
    <ul style="float:right;">                                      <!-- CSS Tabs -->
    <li><a href="logout.php"><span>Logout</span></a></li>
    </ul>
    <?php } ?>
    
</div>
