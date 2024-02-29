<?php
// define variable
$nama = 'ade';
$umur = 19 ;
$berat = 45.30;


$nama = "Ulfa faradillah";

// menampilkan nilai variable
echo "nama saya <b>$nama</b>, <br /> saya berumur " . $umur . " dan memilki berat " . $berat . "gk";


echo "<br />";
echo "<br />";

// variable system
echo 'dokumen root' . $_SERVER
["DOCUMENT_ROOT"];
echo '<br/>Nama File ' . 
$_SERVER["PHP_SELF"];

echo "<br />";
echo "<br />";

// define variable contstant
define('PHI', 3,14);
define('DBNAME', 'inventori');
define('DBSERVER', 'localhost');

$jari = 8;
$luas = PHI * $jari *
$jari;
$kll = 2 * $jari;

echo 'luas lingkaran dengan jari ' . $jari . ' : ' . $luas;
echo '<br />keliliengnya : ' . $kll;

echo "<hr>";

echo "Nama databasenya : " . DBNAME;
echo "<br>lokasi databasenya ada di : " . DBSERVER;

echo "PHI = " . PHI;