<?php 
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gis";


$conn = mysql_connect("$dbhost","$dbuser","$dbpass");

if (!$conn) die ('Gagal Melakukan Koneksi');

mysql_select_db($dbname,$conn) or die ('Database Tidak Ditemukan di Server');
?>