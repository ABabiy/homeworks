<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 07.02.2016
	 * Time: 20:01
	 */
	/*
	 9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
	Ввод текста реализовать с помощью формы.
	*/

//	$str = "sdfdf sssss ffffff hhhh dfgd";

	$str = $_POST['comment'];

	function reverse ($str){

		$res1 = preg_split('//u',$str,-1,PREG_SPLIT_NO_EMPTY);

		krsort($res1);
		echo "Строка ВХОДЯЩАЯ" . "<br>";
		echo $str . "<br>";
		echo "=======================================" . "<br>";
		echo "Строка ИСХОДЯЩАЯ" . "<br>";
		echo $res2 = implode($res1);
	}

		reverse("$str");

?>
<center>
	<form action="9.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
		<input type="text" name="comment" size="40" id="num"
		       placeholder="Ввадите строку: ">
		<br>
		<br>
		<button type="submit">Отправить</button>
	</form>
</center>
