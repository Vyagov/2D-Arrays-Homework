<?php
/* Имате предварително въведени стойности на елементи в двумерен
масив - естествени числа.
Да се състави програма, чрез която се извеждат стойностите на
елементите в двумерен масив след обръщането му на +90 градуса. */

$matrix = [
	[ 1,  2,  3,  4,  5],
	[ 6,  7,  8,  9, 10],
	[11, 12, 13, 14, 15],
	[16, 17, 18, 19, 20],
];

$newMatrix = [];
$countRow = count($matrix);

for ($row = 0; $row < $countRow; $row++) {
	$countCol = count($matrix[$row]);

	for ($col = 0; $col < $countCol; $col++) {

		$newMatrix[$col][$row] = $matrix[$countRow - 1 - $row][$col];
	}
}

foreach ($newMatrix as $rowIndex => $rowValue) {
	
	foreach ($rowValue as $colIndex => $colValue) {
		echo $colValue . ' ';
	}
	echo PHP_EOL;
}
