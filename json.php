<?php

$file = "folio.json";
$json = json_decode(file_get_contents($file));

foreach ($json as $folio) {
	echo $folio->image->big;
}

?>
