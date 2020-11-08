<div class="bottom-text">
<div class="bottom-wrapper">
<div class="bottom-cell">
<ul>
<li><a href=/download.php?item=Brochure.pdf>Portfolio</a></li>
<li><a href="/products.php?type=1">Boards</a></li>
<li><a href="/products.php?type=2">Software</li>
<br />
</div>
<div class="bottom-cell">
<ul>
<li><a href=/account.php>Login</a></li>
<li><a href=/about.php>About</a></li>
<br />
<br />
</ul>
</div>
<div class="bottom-cell">
<ul><?php
//$query = $_GET;
$query = preg_replace("/[<>]/g", "", $_GET);
$baseurl = $_SERVER['PHP_SELF'];
$baseurl = preg_replace("/[<>()\"]/", "", $baseurl);

$query['lang'] = 'EUR';
$eur_result = http_build_query($query);
$query['lang'] = 'USD';
$usd_result = http_build_query($query);
$query['lang'] = 'GBP';
$gbp_result = http_build_query($query);
echo '<li><a href="' . $baseurl . '?' . $gbp_result . '">GBP</a></li>';
echo '<li><a href="' . $baseurl . '?' . $eur_result . '">EUR</a></li>';
echo '<li><a href="' . $baseurl . '?' . $usd_result . '">USD</a></li>';
?>
<br />
</div>
<div class="bottom-cell">
<ul>
<li><a href="terms.php">T&Cs</a></li>
<br />
<br />
<br />
</ul>
</div>
</div>
</div>
</div>
<div class="footer">Copyright © Integrating Solutions</div>
</div> <!-- close wrapper -->
</body>
</html>
</div>
<div class="products-list"></div>
