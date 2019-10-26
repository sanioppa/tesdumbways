<?php

function cetak_gambar($jumlah)
{
	if($jumlah%2!=0)
	{
		for ($i=0; $i <  $jumlah; $i++)
		{

			echo "<br>";
			if($i%2==0)
			{

				for ($c=0;$c < $jumlah; $c++)
				{
					echo "&nbsp; &nbsp;*";
				}

			}else{
				for ($c=0; $c <  $jumlah; $c++) 
				{
					
					if($c==0 || $c==$jumlah-1)
					{
					echo "&nbsp; &nbsp;*";
					}else{
					echo "&nbsp; &nbsp;=";
					}
				}
			}
	  	}
	}else{
		echo "Masukkan hanya bilangan Ganjil!";
	}
}

cetak_gambar(5);

?>