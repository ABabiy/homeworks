<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 06.02.2016
	 * Time: 15:23
	 */

	/*
	 2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3
	длинных слов в тексте. Реализовать с помощью функции.</p>
	*/
//	$text = "Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации";

//	var_dump($_POST);

	$text = $_POST['textarea1'];

	function topThree($text){

		$arr1 = explode(" ", $text);

		var_dump($arr1);
		for ($i = 1; $i <= 3; $i++) {
			$tmpMax = "";
			$tmpKey = "";
			foreach ($arr1 as $key => $item) {
				$tmpRez = mb_strlen($item);
				if ($tmpRez > $tmpMax) {
					$tmpMax = $tmpRez;
					$tmpKey = $key;
				}
			}
			$resArr[] = $arr1[$tmpKey];
			unset($arr1[$tmpKey]);
		}
		echo "ТОП-3 слов в порядке убывания: <br>";
		var_dump($resArr);

	}

	topThree($text);