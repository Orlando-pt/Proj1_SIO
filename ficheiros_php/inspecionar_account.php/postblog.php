<?php
if (isset($_POST['title']) && isset($_POST['content'])) {
    include 'connection.php';
    $sql = "SELECT * FROM tblMembers WHERE session='" . $_COOKIE['SessionId'] . "';";
    $result = mysql_query($sql, $link);
    $row =  mysql_fetch_assoc($result);

    $postBlog = "INSERT INTO tblBlogs (author,title,content) VALUES('" . $row['id'] . "','" . $_POST['title'] . "','" . $_POST['content'] . "');";
    $postResult = mysql_query($postBlog, $link);

    header('Location: /blog.php?author=' . $row['id']);
}
else {
    echo 'Error: Missing input.';
}
?>
</div>
<div class="products-list"></div>
