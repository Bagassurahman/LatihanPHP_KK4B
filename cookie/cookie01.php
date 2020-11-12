<?php
$value = "Bagass";
$value2 = "Bagas Surahman";

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1>Ini Halaman Pengesetan Cookie</h1>";
echo "<h2>Klik <a href='cookie02.php'>Di Sini</a> Untuk Pemeriksaan Cookies</h2>";
?>