<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 07.02.2016
	 * Time: 3:26
	 */
	/*
	 4. Написать функцию, которая выводит список файлов в заданной директории.
	Директория задается как параметр функции.
	*/

	function filesInDir($dir) {
		if (is_dir($dir)) {
			if ($handle = opendir($dir)) {
				while (false !== ($file = readdir($handle))) {
					if ($file != "." && $file != ".." && !is_dir($file)) {
						echo "$file <br> ";
					}
				}
				closedir($handle);
			}
		} else die("Вы не задали параметр функции ДИРЕКТОРИЯ!");
	}

	filesInDir('c:/');