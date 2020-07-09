<?php
	fscanf(STDIN, "%d\n", $n);
	$min = 101; $max = 0; $maxPos = 0; $minPos = 0;
	$soldiers = array_map('intval', explode(' ', fgets(STDIN)));
	for ($i = 0; $i < sizeof($soldiers); $i++)
	{
		if ($soldiers[$i] > $max) { $max = $soldiers[$i]; $maxPos = $i; }
		if ($soldiers[$i] <= $min) { $min = $soldiers[$i]; $minPos = $i; }
	}
	if ($minPos > $maxPos) echo (((sizeof($soldiers) - 1) - $minPos) + $maxPos) . "\n";
	else if ($minPos < $maxPos) echo (((sizeof($soldiers) - 1) - $minPos) + $maxPos) - 1 . "\n";
	else echo 0 . "\n";
?>