<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 07.02.2016
	 * Time: 20:43
	 */
	/*
	 10. Написать функцию, которая считает количество уникальных слов в тексте. Слова
	разделяются пробелами. Текст должен вводиться с формы.
	*/

//	$text = "слово1 слово2 слово3 слово2 слово1";

	if (!empty($_POST["comment"])) {
		$text = $_POST['comment'];
	}else{
		echo ("Вы не вели строку!<br>");
		$text = "";
	}

	function unicWords($text) {
		$res1 = explode(" ", $text);
		sort($res1);
		$tmp = "";
		foreach ($res1 as $key => $item) {
			if ($res1[$key] == $tmp) {
				unset($res1[$key]);
			} else {
				$tmp = $res1[$key];
			}
		}
		echo "Количество уникальных слов в тектсе - " . $res = count($res1);
	}

	unicWords($text);

?>

<center>
	<form action="10.php" method="post" enctype="multipart/form-data">
		<input type="text" name="comment" size="40" id="num"
		       placeholder="Ввадите строку: ">
		<br>
		<br>
		<button type="submit">Отправить</button>
	</form>
</center>




