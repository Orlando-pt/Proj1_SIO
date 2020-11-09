<?php
include 'config.php';
if (!$link = mysqli_connect($host, $user, $pass, $database)) {
    echo 'Could not connect to mysql database';
    exit;
}
?>
</div>
<div class="products-list"></div>
