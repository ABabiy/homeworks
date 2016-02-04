<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 04.02.2016
	 * Time: 15:55
	 */
?>

<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<?php

	/*Урок 22. Константы

	Определить константы, которые соответствуют названиям нескольких стран мира.
	Используя эти константы, сформировать массив из соответствующих значений*/

	echo "Урок 22. Константы <br><br>";

	define('UKRAINE', 'Киев');
	define('RUSSIAN', 'Москва');
	define('FRANCE', 'Париж');

	$sity = array(UKRAINE, RUSSIAN, FRANCE);

	var_dump($sity);


	/*Урок 23. Переменные переменных

	Создать скрипт, который бы вывел на экран значение переменной $$$$$hello.
	Значение может быть любым.*/

	echo "<br>Урок 23. Переменные переменных<br><br>";

	$one = "two";
	$two = "three";
	$three = "four";
	$very_good = "one";
	$hello = "very_good";

	echo($hello . "<br>");
	echo($$hello . "<br>");
	echo($$$hello . "<br>");
	echo($$$$hello . "<br>");
	echo($$$$$hello . "<br>");


	/*Урок 28. Предопределенные переменные

	Создать форму, которая содержит поля name, email, phone.
	Задать скрипт, который выведет на экран отправленные данные -
	$_POST или $_GET (в зависимости от свойств формы)*/

	echo "<br>Урок 28. Предопределенные переменные<br><br>";

	echo "<form method='get'>";
	echo "<input type='text' name='name' placeholder='Name'><br>";
	echo "<input type='text' name='email' placeholder='E-mail'><br>";
	echo "<input type='text' name='phone' placeholder='Phone'><br>";
	echo "<button type='submit'>Отправить</button>";
	echo "</form>";

	var_dump($_GET);

	/*Урок 31. Сериализация

	Создать форму с полями username, email, message . Сериализовать данные, полученные
	при отправке формы и вывести полученную строку на экран .*/

	echo "<br>Урок 31. Сериализация<br><br>";

	echo "<form method='post'>";
	echo "<input type='text' name='username' placeholder='Username'><br>";
	echo "<input type='text' name='email' placeholder='E-mail'><br>";
	echo "<textarea name='message' placeholder='Message'></textarea><br>";
	echo "<button type='submit'>Отправить</button>";
	echo "</form>";

	$res = serialize($_POST);

	echo $res . "<br>";

	/*Урок 33. Арифметические операторы

	Вычислить количество секунд в году и присвоить это значение переменной.
	Вычислить остаток от деления этого значения на 2*/

	echo "<br>Урок 33. Арифметические операторы<br><br>";

	$min = 60;
	$hour = 60 * $min;
	$day = 24 * $hour;
	$year = 365 * $day;
	$res = $year % 2;

	echo("В году {$year} секунд.<br>");
	echo("Остаток от деления на 2 - > {$res}<br>");

	/*Урок 35. Строковые операторы

	Создать строку, содержащую число 12345 используя лишь отдельные цифры 1,2,3,4,5 и операцию конкатенации*/

	echo "<br>Урок 35. Строковые операторы<br><br>";

	$txt_1 = 1;
	$txt_2 = 2;
	$txt_3 = 3;
	$txt_4 = 4;
	$txt_5 = 5;

	$res = $txt_1 . $txt_2 . $txt_3 . $txt_4 . $txt_5;

	echo($res . "<br>");

	/*Урок 36. Логические операторы

	1. Вычислить значение выражения: false && true || false && true || !false && true
	2. Вывести на экран true/false в зависимости о того, делится переменная $x на 2 или нет.*/

	echo "<br>Урок 36. Логические операторы<br><br>";

	$res = false && true || false && true || !false && true;
	echo("1. Результат выражения " . $res . "<br>");

	$v = 761;
	$r = $v % 2;

	if ($r == 0) {
		$res = "true";
	} else {
		$res = "<b>false</b>";
	}

	echo("2. При значении v = {$v} => {$res}<br>");

	/* Урок 37. Операторы присвоения

	Создать алгоритм обмена значениями двух переменных не используя третьей.*/

	echo "<br>Урок 37. Операторы присвоения<br><br>";

	$a = 55;
	$b = 77;

	echo "Начальное значение {$a} <br>";
	echo "Начальное значение {$b} <br>";

	$a = $a + $b;
	$b = $a - $b;
	$a = $a - $b;

	echo "Конечное значение {$a} <br>";
	echo "Конечное значение {$b} <br>";

?>
