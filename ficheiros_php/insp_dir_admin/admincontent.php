<?php
include '../connection.php';
if (isset($_COOKIE['SessionId'])) {
    $loadDetails    = "SELECT session FROM tblMembers WHERE session='" . $_COOKIE['SessionId'] . "' AND admin=1;";
    $detailsResult = mysql_query($loadDetails, $link);
    $detailsData = mysql_fetch_assoc($detailsResult);

    if ($detailsData['session'] == $_COOKIE['SessionId']) {
echo '<div class="content">
<div class="highlights">Welcome Admin</div>
<div class="products-list"></div>';
    }
    else {
        header('Location: /account.php?login=admin');
    }
}
else {
    header('Location: /account.php?login=session');
}
?>
</div>
<div class="products-list"></div>
