<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 07.02.2016
	 * Time: 1:10
	 */
	/*
	 3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N
	символов. Значение N задавать через форму. Проверить работу на кириллических строках -
	найти ошибку, найти решение.
	*/

	/*var_dump($_POST);
	var_dump($_FILES);*/

	if ($_FILES["filename"]["size"] > 1024 * 3 * 1024) {
		echo("Размер файла превышает три мегабайта");
		exit;
	}
	// Проверяем загружен ли файл
	if (is_uploaded_file($_FILES["filename"]["tmp_name"])) {
		// Если файл загружен успешно, перемещаем его
		// из временной директории в конечную
		move_uploaded_file($_FILES["filename"]["tmp_name"], __DIR__ . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $_FILES["filename"]["name"]);
		$lines = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . $_FILES["filename"]["name"]);
		$arr1 = explode(" ", $lines);
	} else {
		echo("Ошибка загрузки файла <br>");
		die;
	}

	$text = "";
	$num = $_POST['num'];

	if (!$num){
		die("Сорри, введите ограничение ! ");
	}

	echo "Массив исходного файла: ";
		var_dump($arr1);

	foreach ($arr1 as $key => $item) {
		$tmpRez = mb_strlen($item);
		if ($tmpRez > $num) {
			unset ($arr1[$key]);
		}
	}

	echo "Массив файла-результата со словами не более {$num} букв : ";
	var_dump($arr1);

	$resText = implode(PHP_EOL, $arr1);

	$file = __DIR__ . DIRECTORY_SEPARATOR . "upload" . DIRECTORY_SEPARATOR . "OUT_" . $_FILES["filename"]["name"];

	file_put_contents($file, $resText);