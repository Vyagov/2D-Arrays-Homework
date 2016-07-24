<?php
/* Имате двумерен масив от числа, чийто стойности са въведени
предварително. Да се отпечатат сумата на елементите на масива,
както и средноаритметичното на тези числа. */

$matrix = [
	[ 1,  2,  3,  4],
	[ 5,  6,  7,  8],
	[ 9, 10, 11, 12],
	[13, 14, 15, 16],
];

$sum = 0;
$countRow = count($matrix);

for ($row = 0; $row < $countRow; $row++) {
	
	$countCol = count($matrix[$row]);

	for ($col = 0; $col < $countCol; $col++) {
		
		$sum += $matrix[$row][$col];
	}
}

$average = $sum / ($countRow * $countCol);

echo "The sum of the elements of the array is $sum,", PHP_EOL;
echo "average of these numbers is $average.";