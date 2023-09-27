<?php
$starclusters = [
	['name' => 'M16/NGC6611', 'constellation' => 'Serpens', 		  'starsqty' => '40', ],
	['name' => 'M26/NGC6694', 'constellation' => 'Scutum',        'starsqty' => '20', ],
	['name' => 'M29/NGC6913', 'constellation' => 'Cygnus', 			  'starsqty' => '50', ],
	['name' => 'M34/NGC1039', 'constellation' => 'Perseus',		    'starsqty' => '100', ],
	['name' => 'M35/NGC2168', 'constellation' => 'Gemini', 		    'starsqty' => '500', ],
	['name' => 'M36/NGC1960', 'constellation' => 'Auriga', 			  'starsqty' => '60', ],
	['name' => 'M37/NGC2099', 'constellation' => 'Auriga', 			  'starsqty' => '500', ],
	['name' => 'M38/NGC1912', 'constellation' => 'Auriga', 			  'starsqty' => '100', ],
	['name' => 'M39/NGC7092', 'constellation' => 'Cygnus', 			  'starsqty' => '20', ],
	['name' => 'M41/NGC2287', 'constellation' => 'Canis Major',   'starsqty' => '100', ],
	['name' => 'M42',					'constellation' => 'Orion', 			 	'starsqty' => '700', ],
	['name' => 'M44/NGC2632', 'constellation' => 'Cancer', 		 		'starsqty' => '1000', ],
	['name' => 'M45', 				'constellation' => 'Taurus', 		 	  'starsqty' => '2000', ],
	['name' => 'M48/2548',	  'constellation' => 'Hydra', 			  'starsqty' => '80', ],
	['name' => 'M50/NGC2323', 'constellation' => 'Monoceros',   	'starsqty' => '2050', ],
	['name' => 'M52/NGC7564', 'constellation' => 'Cassiopeia',  	'starsqty' => '6000', ],
	['name' => 'M73/NGC6994', 'constellation' => 'Aquarius', 		  'starsqty' => '10', ],
	['name' => 'M103/NGC581', 'constellation' => 'Cassiopeia', 	  'starsqty' => '172', ],
	['name' => 'NGC869', 			'constellation' => 'Perseus', 		  'starsqty' => '300', ],
	['name' => 'NGC1981', 		'constellation' => 'Orion', 			  'starsqty' => '50', ],
	['name' => 'NGC2169', 		'constellation' => 'Orion', 			  'starsqty' => '50', ],
	['name' => 'NGC2232', 		'constellation' => 'Monoceros', 	  'starsqty' => '50', ],
	['name' => 'NGC2244', 		'constellation' => 'Monoceros', 	  'starsqty' => '50', ],
	['name' => 'NGC2264', 		'constellation' => 'Monoceros', 	  'starsqty' => '60', ],
	['name' => 'NGC2362', 		'constellation' => 'Canis Major',   'starsqty' => '30', ],
	['name' => 'NGC6633', 		'constellation' => 'Ophiuchus',     'starsqty' => '50-100', ],
	['name' => 'IC4756',      'constellation' => 'Ophiuchus', 		'starsqty' => '50-100', ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Рассеянные звездные скопления</h1>
<table>
<tr>
	<th>Название</th>
	<th>Созвездие</th>
	<th>Количество звезд</th>
</tr>
<?php foreach ($starclusters as $cluster): ?>
	<tr>
	<td><?= $cluster['name'] ?></td>
	<td><?= $cluster['constellation'] ?></td>
	<td><?= $cluster['starsqty'] ?></td>
	</tr>
<?php endforeach; ?>
</table>

	<!--<p> Вместо этого кода был использован цикл foreach
	<?= $starclusters[0]['name'] ?> - 
	<?= $starclusters[0]['constellation'] ?> -
	<?= $starclusters[0]['starsqty'] ?>
</p>
<p>
	<?= $starclusters[1]['name'] ?> -
	<?= $starclusters[1]['constellation'] ?> - 
	<?= $starclusters[1]['starsqty'] ?>
</p>
<p>
	<?= $starclusters[2]['name'] ?> - 
	<?= $starclusters[2]['constellation'] ?>
</p>
<p>
	<?= $starclusters[3]['constellation'] ?> - 
	<?= $starclusters[3]['starsqty'] ?>
</p>-->

</body>
</html>