<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 26.01.2016
	 * Time: 0:27
	 */
?>

<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

<?php

	/*Урок 22. Константы

	Определить константы, которые соответствуют названиям нескольких стран мира.
	Используя эти константы, сформировать массив из соответствующих значений*/


	define('UKRAINE', 'Киев');
	define('RUSSIAN', 'Москва');
	define('FRANCE', 'Париж');

	$sity = array(UKRAINE, RUSSIAN, FRANCE);

	var_dump($sity);

	/*Урок 23. Переменные переменных

	Создать скрипт, который бы вывел на экран значение переменной $$$$$hello.
	Значение может быть любым.*/

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

	echo "<form method='post'>";
	echo "<input type='text' name='username' placeholder='Username'><br>";
	echo "<input type='text' name='email' placeholder='E-mail'><br>";
	echo "<textarea name='message' placeholder='Message'></textarea><br>";
	echo "<button type='submit'>Отправить</button>";
	echo "</form>";

	$res = serialize($_POST);

	echo $res;

?>
