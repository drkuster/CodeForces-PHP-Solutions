<?php
	fscanf(STDIN, "%d\n", $t);
	for ($i = 0; $i < $t; $i++)
	{
		fscanf(STDIN, "%d %d %d %d\n", $a, $b, $c, $d);
		echo $b . " " . $c . " " . $c . "\n";
	}
?>