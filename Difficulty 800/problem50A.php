<?php
	fscanf(STDIN, "%d %d", $gV, $gH);
	$dVH = (int) ($gV / 2) * $gH;
	$dB = ($gV % 2) * (int) ($gH / 2);
	echo $dVH + $dB . "\n";
?>