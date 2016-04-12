<div id="tabsE">
    <ul>
    <!-- CSS Tabs -->
    <li><a href="vw_donors.php"><span>View Donors</span></a></li>
    <li><a href="vw_member.php"><span>View Members</span></a></li>
    <li><a href="vw_requests.php"><span>Search Requests</span></a></li>
    <li><a href="comments.php"><span>Comments</span></a></li>
    </ul>
    
    <?php if(!empty($admin)){ ?>
    <ul style="float:right;">            <!-- CSS Tabs -->
    <li><a href="logout.php"><span>Logout</span></a></li>
    </ul>
<?php } ?>
</div>