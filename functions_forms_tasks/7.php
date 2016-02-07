<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 07.02.2016
	 * Time: 18:10
	 */
	/*
	 7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле
	и добавить его. Все добавленные комментарии выводятся над текстовым полем.
	*/

	//	echo file_get_contents("comments.txt");

	$file = "comments.txt";

	if (!empty($_POST["comment"])) {
		$resText = ($_POST['comment']) . PHP_EOL;
		file_put_contents($file, $resText, FILE_APPEND);
		header('Location: 7.php');
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
	<form action="7.php" method="post" enctype="multipart/form-data">
		<input type="text" name="comment" size="40" id="num"
		       placeholder="Ввадите Ваш комментарий: ">
		<br>
		<br>
		<button type="submit">Отправить</button>
	</form>
</center>