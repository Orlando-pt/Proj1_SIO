<?php
include 'connection.php';

$sql    = "SELECT * FROM tblMembers WHERE username='" . $_POST['usermail'] . "';";
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

if (mysql_num_rows($result) < 1) {
    header('Location: /account.php?login=user') ;
}
else {
    $sql    = "SELECT session FROM tblMembers WHERE username='" . $_POST['usermail'] . "' AND password='" . $_POST['password'] . "';";
    $result = mysql_query($sql, $link);
    if (mysql_num_rows($result) == 0) {
        header('Location: /account.php?login=pass') ;
    }
    else {
        $row =  mysql_fetch_assoc($result);
        setcookie("SessionId", $row['session']);
        header('Location: /account.php?login=success');
    }
}
?>
</div>
<div class="products-list"></div>
