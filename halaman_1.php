<div style="background:red">
<?php
session_start();
if(!isset ($_SESSION["username"])){
	echo "Sesi Sudah Habis!<br>
	<a href='login_form.php'>LOGIN LAGI</a>";;
	exit;
}
echo "SELAMAT DATANG <br>";
echo "USER : ".$_SESSION["username"]."<br>";
echo "NAMA : ".$_SESSION["nama"]."<br>";
?>
<hr><br>
<h1>INI HALAMAN SATU</h1>
</div>