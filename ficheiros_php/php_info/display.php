<div class="content">
<div class="prod-box">
<div class="prod-details">
<?php
include 'connection.php';

if (isset($_GET['type'])) {
    $type = $_GET['type'];
    if (!$_COOKIE['level'] == "1") {
        $type = preg_replace("/\s+/","", $type);
    }
    $sql    = 'SELECT * FROM tblProducts WHERE type =' . $type;

    if (!$result = mysql_query($sql, $link)) {
        header('Location: /index.php') ;
    }

    if (!$result) {
        echo "DB Error, could not query the database\n";
        echo 'MySQL Error: ' . mysql_error();
        exit;
    }

    if (mysql_num_rows($result) > 0) {
        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
        }
        elseif (isset($_COOKIE['lang'])) {
            $lang = $_COOKIE['lang'];
        } else {
            $lang = 'GBP';
        }

        include $lang;

        while ($row = mysql_fetch_assoc($result)) {
            echo '<a href="/details.php?prod=' . $row['id']  . '&type=' . $row['type'] . '"><div class="list-product">';
            echo '<img class=prod-img src=images/products/' . $row['id'] . '.jpg>';
            echo '<strong>Name: </strong>' . $row['name'] . '<br />';
            echo '<strong>Price: </strong>' . $currency . $row['price']*$multiplier;
            echo '</div></a>';
        }

        mysql_free_result($result);
    }
}
?>
</div>
</div>
</div>
<div class="products-list"></div>
