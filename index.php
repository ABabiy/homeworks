<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 26.01.2016
	 * Time: 0:27
	 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>РНР Академия. Дамашние задания</title>

	<link href="css/mycss.css" rel="stylesheet">

	<script>
		document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
	</script>

</head>
<body>

<div class="wrapper">

	<h2>Урок 22. Константы</h2>

	<h3>Определить константы, которые соответствуют названиям нескольких стран мира.
		Используя эти константы, сформировать массив из соответствующих значений</h3>

	<p>
		define('UKRAINE', 'Киев'); <br>
		define('RUSSIAN', 'Москва'); <br>
		define('FRANCE', 'Париж'); <br>
	</p>


	<h3>Код</h3>

	<p>
		<code>
			$sity = array(UKRAINE, RUSSIAN, FRANCE);<br>
			var_dump($sity);<br>
		</code>
	</p>

	<h3>Результат</h3>

	<?php

		define('UKRAINE', 'Киев');
		define('RUSSIAN', 'Москва');
		define('FRANCE', 'Париж');

		$sity = array(UKRAINE, RUSSIAN, FRANCE);

		var_dump($sity);
	?>
</div>

</body>
</html>