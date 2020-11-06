<?php
if(isset($_GET['lang'])) {
    setcookie("lang", $_GET['lang']);
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../app.css">
</head>
<body>
<div class="wrapper">
<div class="header">
<div class="header-text"></div><div class="header-grad">Integrating Solutions</div>
</div>
<div style="background-color:white; width:100%; margin: 0 auto;">
<?php
include 'adminnav.php';
?>
</div>
</div>
<div class="products-list"></div>
