<?php

function generate($totalgenerate){
	$karakter = '1234567890qwertyuiiiopasdfghjkllzxcvbnm';

	for($a=$totalgenerate;$a>0;$a--)
	{
		echo substr(str_shuffle($karakter),0,4)."-".
			 substr(str_shuffle($karakter),0,4)."-".
			 substr(str_shuffle($karakter),0,4)."-".
			 substr(str_shuffle($karakter),0,4)."<br>";
	}
}

echo generate(3);

?>