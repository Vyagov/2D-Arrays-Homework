<?php
/* Имате предварително въведени стойности от естествени числа,
въведени в квадратна таблица с размери 6 реда и 6 колони.
Да се състави програма , чрез която се намира сумата на всички
елементи, чиято сума на индекси за ред и колона е четно число.
Програмата да извежда формираните суми за всеки отделен ред на
квадратната таблица, както и общата сума от тези елементи.
Да се използва само един цикъл. */

$matrix = [
	[11, 12, 13, 14, 15, 16],
	[21, 22, 23, 24, 25, 26],
	[31, 32, 33, 34, 35, 36],
	[41, 42, 43, 44, 45, 46],
	[51, 52, 53, 54, 55, 56],
	[61, 62, 63, 64, 65, 66],
];

$rowsCount = count($matrix);
$colsCount = count($matrix); //The array is square.
$sumRow = 0;
$sumAllRow = 0;

for ($i = 0; $i < $rowsCount * $colsCount; $i++) {
	$rowIndex = floor($i / $rowsCount);
	$colIndex = $i % $colsCount;

	if (($rowIndex + $colIndex) % 2 == 0) {
		$sumRow += $matrix[$rowIndex][$colIndex];
		echo $matrix[$rowIndex][$colIndex] . ', ';
	}

	if ($colIndex == $colsCount - 1) {
		echo 'Sum of the elements for the row: ' . $sumRow, PHP_EOL;
		$sumAllRow += $sumRow;
		$sumRow = 0;
	}
}

echo "Sum of all elements: $sumAllRow.";
