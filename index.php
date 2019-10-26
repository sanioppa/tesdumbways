<?php

$host = mysql_connect("localhost","root","root");

if($host){
	echo "Koneksi host Berhasil.<br>";
}else{
	echo "Koneksi Gagal <br>";
}

$db = mysql_select_db("perpustakaan");

if($db){
	echo "Koneksi DB Berhasil.";
}else{
	echo "Koneksi Gagal.";
}

?>