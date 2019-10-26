<?php

$host = mysqli_connect("localhost","root","root","perpustakaan");

if($host){
	echo "Koneksi host Berhasil.<br>";
}else{
	echo "Koneksi Gagal <br>";
}

?>