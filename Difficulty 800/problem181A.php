<?php
	fscanf(STDIN, "%d %d", $n, $m);
	$rowPos = 0; $colPos = 0;
	$rows = array_fill(0, $n, 0); $cols = array_fill(0, $m, 0);
	for ($i = 0; $i < $n; $i++)
	{
		$row = fgets(STDIN);
		for ($j = 0; $j < $m; $j++) if ($row[$j] == '*') { $rows[$i]++; $cols[$j]++; }
	}
	for ($i = 0; $i < $n; $i++) if ($rows[$i] == 1) $rowPos = $i + 1;
	for ($i = 0; $i < $m; $i++) if ($cols[$i] == 1) $colPos = $i + 1;
	echo $rowPos . " " . $colPos . "\n";
?>