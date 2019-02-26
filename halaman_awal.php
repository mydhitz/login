<?php
session_start();
if(!isset ($_SESSION["username"])){
	echo "Sesi Sudah Habis!<br>
	<a href='index_login.php'>LOGIN LAGI</a>";;
	exit;
}
echo "SELAMAT DATANG <br>";
echo "USER : ".$_SESSION["username"]."<br>";
echo "NAMA : ".$_SESSION["nama"]."<br>";
?>
<hr>
<div id="menu">
<h2>Menu Halaman Lain</h2>
Ini merupakan halaman dasboard !<br>
<a href="halaman_1.php">Halaman 1</a><br>
<a href="halaman_2.php">Halaman 2</a><br>
<a href="logout.php">LOGOUT</a><br>
</div>
