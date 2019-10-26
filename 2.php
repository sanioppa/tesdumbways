<?php

function kembalian($total_belanja,$dibayarkan){
	/*
	$dibayarkan = 250000;
	$total_belanja = 220000;
	*/

echo 'Total Belanja : '.$total = $total_belanja;
echo "<br>Uang yang dibayarkan :".$bayar = $dibayarkan;

	$jumlah5000=0;
	$jumlah10000=0;
	$jumlah20000=0;
	$jumlah50000=0;
	$pecahan5000='';
	$pecahan10000='';
	$pecahan20000='';
	$pecahan50000='';
	$cashback = $total/10;

	if ($total_belanja>200000) {

		echo "<br> Cashback 10%";
		$total = $total-$cashback;
		echo "<br> Kembalian : ".$kembalian = $bayar-$total;

		echo "<br> Total yang harus dibayar : ".$total;

	}else  {
		
		$kembalian = $bayar-$total;
	}

	while ($kembalian>0) {

		if ($kembalian>=50000) {
			$jumlah50000++;
			$result = "50.000";
			$pecahan50000 = $jumlah50000." X ".$result."<br>";
			$kembalian = $kembalian-$result;
		}
		if ($kembalian>=20000) {
			$jumlah20000++;
			$result = "20.000";
			$pecahan20000 = $jumlah20000." X ".$result."<br>";
			$kembalian = $kembalian-$result;
		}
		if ($kembalian>=10000) {
			$jumlah10000++;
			$result = "10.000";
			$pecahan10000 = $jumlah10000." X ".$result."<br>";
			$kembalian = $kembalian-$result;
		}
		if ($kembalian>=5000) {
			$jumlah5000++;
			$result = "5000";
			$pecahan5000 = $jumlah5000." X ".$result."<br>";
			$kembalian = $kembalian-$result;
		}
		if ($kembalian<5000) {
			$sumbang = "Uang senilai ".$kembalian." di sumbangkan karena tidak ada pecahan di bawah Rp 5.000,-";
			$kembalian=0;
		}
	}


	return "<br>".$pecahan50000.$pecahan20000.$pecahan10000.$pecahan5000.$sumbang;
}





echo kembalian(220000,250000);

?>