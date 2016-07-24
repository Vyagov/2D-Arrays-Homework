<?php
/* Да се състави програма, при която предварително са въведени
естествени числа в двумерен масив 4*4 елемента.
Програмата да извежда резултат от проверката какво е съотношението
на най-голямата сума по редове спрямо най-голямата сума по колони. */

$matrix = [
	[ 1,  2,  3,  4],
	[ 5,  6,  7,  8],
	[ 9, 10, 11, 12],
	[13, 14, 15, 16],
];

$maxSumRow;
$maxSumCol;
$countRow = count($matrix);

for ($row = 0; $row < $countRow; $row++) {
	$sumRow = 0;
	$sumCol = 0;
	$countCol = count($matrix[$row]);
	
	for ($col = 0; $col < $countCol; $col++) {
		$sumRow += $matrix[$row][$col];
		$sumCol += $matrix[$col][$row];
	}
	
	if (!isset($maxSumRow) || $sumRow > $maxSumRow) {
		$maxSumRow = $sumRow;
	}
	
	if (!isset($maxSumCol) || $sumCol > $maxSumCol) {
		$maxSumCol = $sumCol;
	}
}

echo "The largest sum by rows is $maxSumRow, ", PHP_EOL;
echo "The largest sum by cols is $maxSumCol, ", PHP_EOL;

if ($maxSumRow == $maxSumCol) {
	echo 'Max sum of rows = Max sum of cols';
} else {
	echo 'Max sum of rows ';
	echo $maxSumRow > $maxSumCol ? '> Max sum of cols' : '< Max sum of cols';
}
