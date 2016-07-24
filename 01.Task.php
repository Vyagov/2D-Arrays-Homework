<?php
/* Имате двумерен масив 6х5 от естествени числа, чийто стойности са
въведени предварително.
Да се състави програма, чрез която се извеждат елементите от масива
с най-малката и най-голямата стойност. */

$matrix = [
	[48, 72, 13, 14, 15],
	[21, 22, 53, 24, 75],
	[31, 57, 33, 34, 35],
	[41, 95, 43, 44, 45],
	[59, 52, 53, 54, 55],
	[61, 69, 63, 64, 65],
];

$maxValue = $matrix[0][0];
$minValue = $matrix[0][0];
$countRow = count($matrix);

for ($row = 0; $row < $countRow; $row++) {
	$countCol = count($matrix[$row]);
	
	for ($col = 0; $col < $countCol; $col++) {

		if ($matrix[$row][$col] > $maxValue) {
			$maxValue = $matrix[$row][$col];
		}
		if ($matrix[$row][$col] < $minValue) {
			$minValue = $matrix[$row][$col];
		}
	}
}

echo "The smallest is $minValue,", PHP_EOL;
echo "The largest is $maxValue.";