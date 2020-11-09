<?php
if (!isset($_COOKIE['level'])) {
    setcookie("level", "1");
}
if (strpos($_SERVER['HTTP_USER_AGENT'], "sqlmap") !== false ||
strpos($_SERVER['HTTP_USER_AGENT'], "Havij") !== false ||
strpos($_SERVER['HTTP_USER_AGENT'], "Nikto") !== false ||
strpos($_SERVER['HTTP_USER_AGENT'], "requests") !== false ||
strpos($_SERVER['HTTP_USER_AGENT'], "ZAP") !== false ||
strpos($_SERVER['HTTP_USER_AGENT'], "Burp") !== false ||
strpos($_SERVER['HTTP_USER_AGENT'], "Metasploit") !== false ||
strpos($_SERVER['HTTP_USER_AGENT'], "Gecko/20060418 Firefox/1.0.8") !== false) {
    exit;
}
if(isset($_GET['lang'])) {
    setcookie("lang", $_GET['lang']);
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
</div>
<div class="wrapper">
<div class="header">
</div>
<div style="background-color:white; width:100%; margin: 0 auto;">
<?php
include 'nav.php';
?>
</div>
</div>
<div class="products-list"></div>
