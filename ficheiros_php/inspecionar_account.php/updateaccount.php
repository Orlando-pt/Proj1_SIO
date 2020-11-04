<?php
if (isset($_POST['name']) && isset($_POST['password'])) {
    include 'connection.php';
    $postUpdate = "UPDATE tblMembers SET name='" . $_POST['name'] . "',password='" . $_POST['password'] . "' WHERE session='" . $_COOKIE['SessionId'] . "';";
    $postResult = mysql_query($postUpdate, $link);
    header('Location: /account.php?user=updated');
}
else {
    echo 'Error: Missing input.';
}
?>
</div>
<div class="products-list"></div>
