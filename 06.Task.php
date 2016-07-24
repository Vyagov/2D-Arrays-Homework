<?php
/* Имате предварително въведени стойности от естествени числа.
Числата са въведени в квадратна таблица с размери 6 реда и 6
колони.
Да се състави програма, чрез която се намира сумата на всички
елементи от редовете с четни номера: 2,4 и 6.
Програмата да извежда и сумата на всеки отделен ред. */

$matrix = [
		[11, 12, 13, 14, 15, 16],
		[21, 22, 23, 24, 25, 26],
		[31, 32, 33, 34, 35, 36],
		[41, 42, 43, 44, 45, 46],
		[51, 52, 53, 54, 55, 56],
		[61, 62, 63, 64, 65, 66],
];

$sumEvenRow = 0;
$sumAllEvenRow = 0;
$countRow = count($matrix);

for ($row = 1; $row < $countRow; $row += 2) {
	$sumEvenRow = 0;
	$countCol = count($matrix[$row]);

	for ($col = 0; $col < $countCol; $col++) {

		$sumEvenRow += $matrix[$row][$col];
		echo $matrix[$row][$col];
		echo $col < $countCol - 1 ? ', ' : ' - ';
	}
	
	$sumAllEvenRow += $sumEvenRow;
	echo 'Sum of the elements: ' . $sumEvenRow, PHP_EOL;
}

echo "Sum of all elements of even rows: $sumAllEvenRow.";
