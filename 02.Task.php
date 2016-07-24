<?php
/* Имате квадратен двумерен масив от естествени числа, чийто стойности
се въвеждат от конзолата. Да се отпечатат диагоналите на масива. */

require_once 'readline.php';

$matrix = [];

// ',' - stop reading row
// '.' - stop reading entire matrix

do {
	$rows = [];
	$count = 0;
	do {
		$input = readline('Enter next element: ');

		if ($input != ',' && $input != '.') {
			$rows[] = $input;
			$count++;
		}
		
	} while ($input != ',' && $input != '.');

	if (!empty($rows)) {
		$matrix[] = $rows;
	}

} while ($input != '.');

echo 'The input array is:', PHP_EOL;

foreach ($matrix as $rowIndex => $rowValue) {

	foreach ($rowValue as $colIndex => $colValue) {
		echo $colValue . ' ';
	}
	echo PHP_EOL;
}

$countRow = count($matrix);

if ($countRow != $count) {
	die('The array is not square!');
}

echo 'Main diagonal:', PHP_EOL;

for ($row = 0; $row < $countRow; $row++) {
	
	echo $matrix[$row][$row] . ' ';
}

echo PHP_EOL, 'Second diagonal:', PHP_EOL;

for ($row = 0; $row < $countRow; $row++) {
	
	echo $matrix[$row][$countRow - 1 - $row] . ' ';
}
