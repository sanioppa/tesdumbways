<?php

$dataKey = array('dumb','ways','the','best');
$data = 'dumbways';

/*  echo $dataKey[2];
echo $data; */

for($i=0; $i<count($dataKey); $i++){

	if (preg_match("/".$dataKey[$i]."/", $data, $match))
	{
		echo $match[0].' => true <br>';
	}else{
		echo $dataKey[$i].' => false <br>';
	}

}

?>