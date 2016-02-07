<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 07.02.2016
	 * Time: 19:34
	 */
/*
 8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле
и добавить его. Все добавленные комментарии выводятся над текстовым полем.
Реализовать проверку на наличие в тексте запрещенных слов, матов. При наличии таких слов -
выводить сообщение "Некорректный комментарий". Реализовать удаление из комментария всех
тегов, кроме тега &lt;b&gt;.
*/

	$file = "comments-mat.txt";
	$arrPorno = array("жопа", "задница");

	if (!empty($_POST["comment"])) {
		$resText = ($_POST['comment']);
		$arr1 = explode(" ", $resText);
		foreach ($arr1 as $key1 => $item1) {
			foreach ($arrPorno as $key2 => $item2){
				if($item2 == $item1){
					$arr1[$key1] = "ЦЕНЗУРА!";
				}
			}
		}
		$resText = strip_tags(implode(" ", $arr1)) . PHP_EOL;

		file_put_contents($file, $resText, FILE_APPEND);
		header('Location: 8.php');
	}/* else {
		echo "Пока пусто!";
	}*/

?>

<table width="500" align="center" border="0" bgcolor="#f0f8ff">
	<tr>
		<td>

			<?php
				$handle = @fopen($file, "r");
				if ($handle) {
					while (($buffer = fgets($handle, 4096)) !== false) {
						echo "<tr><td>";
						echo $buffer . "<br>";
						echo "</td></tr>";
					}
					if (!feof($handle)) {
						echo "Error: unexpected fgets() fail\n";
					}
					fclose($handle);
				}
			?>
		</td>
	</tr>
</table>
<br><br>

<center>
	<form action="8.php" method="post" enctype="multipart/form-data">
		<input type="text" name="comment" size="40" id="num"
		       placeholder="Ввадите Ваш комментарий: ">
		<br>
		<br>
		<button type="submit">Отправить</button>
	</form>
</center>