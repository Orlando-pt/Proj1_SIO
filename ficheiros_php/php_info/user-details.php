<div class="content">
<div class="highlights">
<div class="user-details">
<?php
if (!isset($_COOKIE['SessionId'])) {
    echo '<div class="login-box"><section class="loginform cf">';
    if ($_GET['login'] == "user") {
        echo '<strong>Invalid username, please try again.</strong><br /><br />';
    }
    elseif ($_GET['login'] == "admin") {
        echo '<strong>Not an admin account, please login with higher privileges.</strong><br /><br />';
    }
    elseif ($_GET['login'] == "pass") {
        echo '<strong>Invalid password, please try again.</strong><br /><br />';
    }
    echo '<form name="login" action="login.php" method="post" accept-charset="utf-8">
    <ul>
        <li><label for="usermail">Email</label>
        <input type="email" name="usermail" placeholder="yourname@email.com" required></li>
        <li><label for="password">Password</label>
        <input type="password" name="password" placeholder="password" required></li>
        <li>
        <input type="submit" value="Login"></li>
    </ul>
    </form>
    </section></div>';
}
elseif ($_GET['login'] == "session") {
    echo 'ERROR: Invalid Session<br />';
    echo '<a href="/logout.php"><strong>Logout</strong></a>';
}
else {
    if (isset($_GET['user'])) {
        echo '<strong>Account updated!<br /></strong>';
    }

    include 'connection.php';

    $loadDetails    = "SELECT * FROM tblMembers WHERE session='" . $_COOKIE['SessionId'] . "';";
    $detailsResult = mysql_query($loadDetails, $link);
    $detailsData = mysql_fetch_assoc($detailsResult);
    if (!$detailsResult) {
        echo "DB Error, could not query the database\n";
        echo 'MySQL Error: ' . mysql_error();
    }

    if (mysql_num_rows($detailsResult) < 1) {
        header('Location: /account.php?login=session') ;
    }
    else {
        $sql    = "SELECT name FROM tblMembers WHERE session='" . $_COOKIE['SessionId'] . "';";
        $result = mysql_query($sql, $link);
	$row =  mysql_fetch_assoc($result);
        echo "Hello " . $row['name'] . "! [<a href=/logout.php><strong>Logout</strong></a>]<br /><br />";

        $blogCheck    = "SELECT * FROM tblMembers WHERE session='" . $_COOKIE['SessionId'] . "' AND blog=1;";
        $blogResult = mysql_query($sql, $link);
        if (mysql_num_rows($result) == 1) {
            echo '<div class="blogbox"><strong>Post new blog:</strong><br /><br />
<form action="postblog.php" method="post">
Title:  <input type="text" name="title"><br /><br />
Content:<br />
<div class=postbox>
<textarea cols="50" rows="4" name="content"></textarea>
<br><br>
  <input type="submit" value="Post">
</form></div></div>';
        }
        echo '<div class="blogbox"><strong>Update Account:</strong><br /><br />';
echo '<form action="updateaccount.php" method="post">
Name:  <input type="text" name="name"><br /><br />
Password:  <input type="password" name="password"><br /><br />';
echo '<input type="hidden" name="blog" value=' . $detailsData['blog'] . '>';
echo '<br><br>
 <input type="submit" value="Update">
</form></div>';
    }
}
?>
</div>
</div>
<div class="products-list"></div>
</div>
<div class="products-list"></div>
