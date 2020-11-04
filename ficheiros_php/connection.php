<?php
include 'config.php';
if (!$link = mysql_connect($host, $user, $pass)) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db($database, $link)) {
    echo 'Could not select database';
    exit;
}
?>
</div>
<div class="products-list"></div>
