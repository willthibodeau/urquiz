<?php
function wCounter($w) {
	$file = fopen("winners.txt", "a+");
	$w = fgets($file);
		($w > 0) ? $w++ : '';
	fclose($file);
	return $w;
}
function lCounter($l) {
	$file = fopen("loosers.txt", "a+");
	$l = fgets($file);
		($l > 0) ? $l++ : '';
	fclose($file);
	return $l;
}

?>