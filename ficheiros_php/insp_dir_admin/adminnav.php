<?php
include '../connection.php';
$loadDetails    = "SELECT admin FROM tblMembers WHERE session='" . $_COOKIE['SessionId'] . "';";
$detailsResult = mysql_query($loadDetails, $link);
$detailsData = mysql_fetch_assoc($detailsResult);
if ($detailsData['admin'] == 1) {
    echo '<div class="nav-wrapper">
<div class="nav-main">
<a href="/"><div class="nav-button">Home</div></a>
<a href="/admin/admin.php"><div class="nav-button">Admin</div></a>
<a href="/admin/addproduct.php"><div class="nav-button">Add</div></a>
<a href="/admin/delproduct.php"><div class="nav-button">Remove</div></a>
<a href="/account.php"><div class="nav-button">My Account</div></a>
</div></div>';
}
?>
</div>
<div class="products-list"></div>
