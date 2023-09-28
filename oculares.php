<?php
//задача состоит в следующем: составить функцию для вычисления увеличения окуляра разного фокусного расстояния и цикл foreach для вывода значений многомерного массива в таблице
$appertura = 700;

$oculares = [
	['value' => 40 ],
	['value' => 25 ],
	['value' => 20 ], 
	['value' => 15 ], 
	['value' => 9 ], 
	['value' => 6 ], 
	];

function increase_oculares(int $focal, int $focalocular): int
{
	$focalocular = $focal / $focalocular;
	return $focalocular;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Увеличения, которые дают окуляры</h1>
	<table>
		<tr>
			<th>F</th>
			<th>f</th>
			<th>крат</th>
		</tr>
		<?php foreach ($oculares as $key => $val): ?>
			<tr>
			<td><?= $appertura ?></td>
			<td><?= $val['value'] ?></td>
			<td><?= increase_oculares(700, $val['value']) ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>