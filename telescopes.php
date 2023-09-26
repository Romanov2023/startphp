<?php
$marketname = 'observer';
$price = 50000;


//индексированный массив: использование цикла for
$telescopes = [
	'Levenhuk Skyline PLUS 130S' 					,
	'Sky-Watcher BK 1309EQ2'							,
	'Sky-Watcher N130/650 StarQuest EQ1'  ,
	'Sky-Watcher BK P15012EQ3-2'					,
	'Sky-Watcher BK P1501EQ3-2'	 					,
	'Sky-Watcher StarTravel BK 150750 OTA',
	'Sky-Watcher BK P2001EQ5'    					,
	'Sky-Watcher BK 15012EQ6 SynScan GOTO',
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Магазин: <?= $marketname ?></h1>
	<p>
		<?php
		for ($i = 1; $i < 8; $i++) {
			echo ' ';
			echo $telescopes[$i];
			echo '  ';
			echo $price * $i;
			echo '<br>';
		}
		?>
	</p>
</body>
</html>