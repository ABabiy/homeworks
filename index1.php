<?php
	header("Content-Type: text/html; charset=utf-8");
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 31.01.2016
	 * Time: 4:21
	 */

	/*
	 *Домашнее задание от 28.01.2016
	 *Массивы и Циклы
	 */

	/*
	 Работа с foreach
	 1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach
	выведите эти слова в столбик.
	*/

	$langs = array('html', 'css', 'php', 'js', 'jq');
	foreach ($langs as $lang) {
		echo $lang . "<br>";
	}

	/*
	 2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму
	элементов этого массива. Запишите ее в переменную $result.
	*/

	$num = array(1, 20, 15, 17, 24, 35);
	$m = 0;
	foreach ($num as $n) {
		$m = $m + $n;
	}
	echo $m . "<br>";

	/*
	 3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите
	сумму квадратов элементов этого массива. Результат запишите переменную $result.
	*/

	$num = array(26, 17, 136, 12, 79, 15, 3);
	$result = 0;
	foreach ($num as $n) {
		$n = pow($n, 2);
		echo "n = " . $n . "<br>";
		$result = $result + $n;
		echo "Промежуточный результат = " . $result . "<br>";
	}
	echo "Конечный результат " . $result . "<br>";

	/*
	 Работа с ключами
	*/

	/*
		4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей,
	с помощью второго — столбец элементов.
	*/
	$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
	foreach ($arr as $key => $a) {
		echo "Ключи - " . $key . "<br>";
	}

	foreach ($arr as $key => $a) {
		echo "Значения - " . $a . "<br>";
	}

	/*
	 5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'.
	С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата
	 200 долларов.'.
	*/
	$arr = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');
	foreach ($arr as $key => $item) {
		echo $key . " - зарплата " . $item . "<br>";
	}

	/*
	 6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en,
	а русские — в массив $ru.
	*/
	$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
	/*$en = array('green', 'red','blue');
	$ru = array('зеленый', 'красный', 'голубой');*/
	foreach ($arr as $key => $item) {
		$en[] = $key;
		$ru[] = $item;
	}
	var_dump($en);
	var_dump($ru);

	/*
	 7.Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
	выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10.
	*/
	$arr = array(2, 5, 9, 15, 0, 4);
	foreach ($arr as $item) {
		if ($item > 3 && $item < 10) {
			echo $item . "<br>";
		}
	}

	/*
	 8.Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте
	строку '-1-2-3-4-5-6-7-8-9-'.
	*/
	$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$res = "";
	foreach ($arr as $item) {
		$res = $res . $item . "-";
	}
	echo "-" . $res . "<br>";

	/*
	 Циклы while и for
	*/
	/*
	 9. Выведите столбец чисел от 1 до 100.
	*/
	for ($i = 1; $i <= 100; $i++) {
		echo $i . "<br>";
	}
	/*
	 10. Выведите столбец чисел от 11 до 33.
	*/
	for ($i = 11; $i <= 33; $i++) {
		echo $i . "<br>";
	}
	/*
	 Выведите столбец четных чисел в промежутке от нуля до 100.
	*/
	for ($i = 0; $i <= 100; $i++) {
		if (!($i % 2) && $i != 0) {
			echo $i . "<br>";
		}
	}
	/*
	 Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
	меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого
	(итерации — это количество проходов цикла), и запишите его в переменную $num.
	*/
	$i = 1000;
	$col = 0;
	while ($i > 50) {
		echo ($i = $i / 2) . "<br>";
		$col = ++$col;
	}
	echo "Количество итераций " . ($col - 1) . "<br>";

	/*
	 2 вариант
	*/
	$i = 1000;
	$col = 0;
	do {
		echo ($i = $i / 2) . "<br>";
		$col = ++$col;
	} while ($i > 50);
	echo "Количество итераций " . ($col - 1) . "<br>";

	/*
	 13. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора
	if выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10.
	*/
	$arr = array(4, 2, 5, 19, 13, 0, 10);
	foreach ($arr as $item) {
		if ($item > 3 && $item < 10) {
			echo $item . "<br>";
		}
	}

	/*
	 14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора
	if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
	выведите на экран 'Есть!', иначе выведите 'Нет!'.
	*/
	$arr = array(4, 2, 5, 19, 13, 0, 10);
	foreach ($arr as $item) {
		$e = $item;
		if ($e == 2 || $e == 3 || $e == 4) {
			echo "Есть! <br>";
		} else {
			echo "Нет! <br>";
		}
	}
	/*
	 15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
	элементов этого массива. Проверьте работу скрипта на примере массива с элементами
	4, 2, 5, 19, 13, 0, 10.
	*/
	$arr = array(4, 2, 5, 19, 13, 0, 10);
	$count = 0;
	foreach ($arr as $item) {
		$count = ++$count;
	}
	echo "Количество элементов массива {$count} . <br>";

	/*
	 16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и
	оператора if выведите на экран столбец элементов массива, как показано на картинке.

	1, 2, 3
	4, 5, 6
	7, 8, 9
	*/
	$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$count = 0;
	foreach ($arr as $item) {
		if ($count < 2) {
			echo $item . ",";
			$count = ++$count;
		} else {
			echo $item . "<br>";
			$count = 0;
		}
	}

	/*
	 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
	месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
	*/
	$arr = array(
			"01" => "январь",
			"02" => "февраль",
			"03" => "март",
			"04" => "апрель",
			"05" => "май",
			"06" => "июнь",
			"07" => "июль",
			"08" => "август",
			"09" => "сентябрь",
			"10" => "октябрь",
			"11" => "ноябрь",
			"12" => "декабрь");

	$month = date('m');
//	echo "Текущий месяц - " . $month . "<br>";

	foreach ($arr as $key => $item) {
		if ($key == $month) {
			echo "<strong>{$item}</strong> - текущий месяц<br>";
		} else {
			echo "{$item}<br>";
		}
	}
	/*
	18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
	выходные дни следует вывести жирным.
	*/
	$arr = array(
			"01" => "Понедельник",
			"02" => "Вторник",
			"03" => "Среда",
			"04" => "Четверг",
			"05" => "Пятница",
			"06" => "Суббота",
			"07" => "Воскресенье"
	);
	foreach ($arr as $key => $item) {
		if ($key == 06 || $key == 07) {
			echo "<strong>$item</strong><br>";
		} else {
			echo "$item <br>";
		}
	}
	/*
	 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
	текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
	*/
	$arr = array(
			"1" => "Понедельник",
			"2" => "Вторник",
			"3" => "Среда",
			"4" => "Четверг",
			"5" => "Пятница",
			"6" => "Суббота",
			"7" => "Воскресенье"
	);

	echo $day = date('N');

	foreach ($arr as $key => $item) {
		if ($key == $day) {
			echo "<i>$item</i><br>";
		} else {
			echo "$item <br>";
		}
	}
	/*
	 20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
	рядов, а не 5.
						x
						xx
						xxx
						xxxx
						xxxxx
	*/
	$n = 20;
	for ($i = 1; $i <= $n; $i++) {
		echo str_repeat("X", $i) . "<br>";
	}
	/*

	21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
	рядов, а не 5.

						1
						22
						333
						4444
						55555
	*/
	$n = 9;
	for ($i = 1; $i <= $n; $i++) {
		echo str_repeat($i, $i) . "<br>";
	}
	/*
	 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
							xx
							xxxx
							xxxxxx
							xxxxxxxx
							xxxxxxxxxx
	*/
	$n1 = 1;
	$n2 = 5;
	for ($i = $n1; $i <= $n2; $i++) {
		echo str_repeat("XX", $i) . "<br>";
	}

	/*
	 2 - ой вариант
	*/
	$i = 1;
	$n2 = 5;
	while ($i <= $n2) {
		echo str_repeat("XX", $i) . "<br>";
		$i++;
	}
	/*
	 1.Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
	пользователем. Например: есть число 123, то программа должна вычислить сумму цифр
	1, 2, 3, т. е. 6.
  По желанию можете сделать проверку на корректность введения данных пользователем.
	*/
	$numUser = "3333545353535333434345345351211200043453";
	$res = 0;
	if (is_numeric($numUser)) {
		echo "Строка является числом! <br>";
		$arr = str_split($numUser);
		foreach ($arr as $item) {
			$res = $res + $item;
		}
		echo "Сумма всех цифр строки - " . $res . "<br>";
	} else {
		echo "Строка НЕ является числом! <br>";
	}
	/*
	 2.Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть
	выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745
	встречается 4 раза
	*/
	$numUser = "3333545353535333434345345351211200043453";
	$numSearch = 3;
	$res = 0;
	$arr = str_split($numUser);
	foreach ($arr as $item) {
		if ($item == $numSearch) {
			$res = ++$res;
		}
	}
	echo "Количество вхождений цифры <b>{$numSearch}</b> - {$res} позиций<br>";
	/*
	 3.Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти
	максимальное и минимальное значение и поменять их местами.
	*/
	$arrCount = 10;
	for ($i1 = 0; $i1 < $arrCount; $i1++) {
		$item = $arr1[] = (real)rand();
	}
	sort($arr1);

	$minNumb = $arr1[0];
	$maxNumb = $arr1[$arrCount - 1];

	echo "Минимальное число - {$minNumb}<br>";
	echo "Максимальное число - {$maxNumb}<br>";

	echo "До обмена <br>";
	var_dump($arr1);

	$minNumb = $minNumb + $maxNumb;
	$maxNumb = $minNumb - $maxNumb;
	$minNumb = $minNumb - $maxNumb;

	$arr1[0] = $minNumb;
	$arr1[$arrCount - 1] = $maxNumb;

	echo "Минимальное число - {$minNumb}<br>";
	echo "Максимальное число - {$maxNumb}<br>";

	echo "После обмена <br>";
	var_dump($arr1);

	/*
	 4.Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand).
	Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
	индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
	индекс.
	*/
	$arrCount = 10;
	for ($i1 = 0; $i1 < $arrCount; $i1++) {
		$item = $arr2[] = (real)rand(1, 100);
	}
	$res1 = 1;
	foreach ($arr2 as $key => $item) {
		if ($item > 0 && !($key % 2)){
//			echo $item . "<br>";
				$res1 = $res1 * $item;
		}
		if ($item > 0 && ($key % 2)){
			echo "По условию (больше нуля и не парный индекс) - " . $item . "<br>";
		}
	}
	echo "Произведение по условию (больше нуля и парный индекс) - $res1";