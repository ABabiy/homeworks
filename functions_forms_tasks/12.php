<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 16.02.2016
	 * Time: 3:27
	 */
	/*
	 12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее
	таким образом, что предложения идут в обратном порядке.<br>
	Пример:
	Входная строка:  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь,
	все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть
	трава не расти.';<br><br>
	Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик просто открывался.
	А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и
	ныне там.А Васька слушает да ест.'
	*/
	$textin = "А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь,
	все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть
	трава не расти.";

	echo "<u>Входящий текст:</u>{$textin}<br>";

	function invert_sent($text) {
		$res = explode('. ', $text);
		krsort($res);
		$resOut = implode(". ", $res);
		return $resOut;
	}

	echo "<u>Вывод функции:</u> " . invert_sent($textin);