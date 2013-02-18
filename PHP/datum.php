<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Projekt 1 </title>
<link type="text/css" rel="stylesheet" href="style.css" />
<script type="text/javascript">
if (document.all)
{
document.createElement("article");
document.createElement("footer");
document.createElement("header");
document.createElement("section");
document.createElement("nav");
document.createElement("aside");
}
</script>
</head>

<body>
<div id="sidan">
<header><h1>Projekt 1</h1><p>PHP</p></header>
<nav>
<ul>
	<li><a href="index.php">hem</a></li>
	<li><a href="systemarea.php">info</a></li>
	<li><a href="datum.php">datum</a></li>
	<li><a href="tid.php">tid</a></li>
	<li><a href="post.php">e-post</a></li>
	<li><a href="cookie.php">cookie</a></li>
	<li><a href="session.php">session</a></li>
	<li><a href="uppladda.php">uppladda</a></li>
	<li><a href="besok.php">besök</a></li>
	<li><a href="gaster.php">gäster</a></li>
	<li><a href="rapport.php">rapport</a></li>

</ul>
</nav>
<div id="innehall">

<div id="text">

<h3>Datum i php</h3>

<p>Datumhantering i php</p> <br />

<?php
$nu=time();

echo "<p>Nu är klockan ".date("G:i:s")." och det är den ".date("j.n.o").".</p>";

$veckonummer = date("W");
$veckodag=array("söndag","måndag","tisdag","onsdag","torsdag","fredag","lördag");
$manad=array("omöjlig","januari","februari","mars","april","maj","juni","juli","augusti",
"september","oktober","november","december");

$today = date("w", $nu); // w = numerisk representation av en veckodag
$month = date("n", $nu); // n = numerisk representation av en månad

print "Veckodagen idag är ".$veckodag[$today].".<br />";
print "Månadens är ".$manad[$month].".<br />";
print "Det är vecka nummer " . $veckonummer . "<br />";

?>
<br /> <br />
<a href="phps/datum.phps">Kolla källkoden!</a>

</div>

</div>
<footer>
<table class="fot"><tr><td>© Daniel Storgårds</td><td>15.1.2012</td></tr></table>
</footer>

</div>
</body>
</html>