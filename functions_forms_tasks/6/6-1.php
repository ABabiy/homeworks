<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 07.02.2016
	 * Time: 4:33
	 */

	$resCount = count($_FILES["filename"]["tmp_name"]);

	for ($i = 0; $i <= ($resCount - 1); $i++) {
		if ($_FILES["filename"]["size"][$i] > 1024 * 3 * 1024) {
			echo("Размер файла превышает три мегабайта");
			exit;
		}
		// Проверяем загружен ли файл
		if (is_uploaded_file($_FILES["filename"]["tmp_name"][$i])) {
			// Если файл загружен успешно, перемещаем его
			// из временной директории в конечную
			move_uploaded_file($_FILES["filename"]["tmp_name"][$i], __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR . $_FILES["filename"]["name"][$i]);
			$lines = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR . $_FILES["filename"]["name"][$i]);
			$arr1 = explode(" ", $lines);
		} else {
			echo("Ошибка загрузки файла <br>");
			die;
		}
	}

	$dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery";

	if ($handle = opendir($dir)) {

		?>
		<table border="1" bgcolor="#f0f8ff" align="center" cellpadding="10" cellspacing="20">
			<?php
				$j = 0;
				while (false !== ($file = readdir($handle))) {
					$j = $j + 1;
					if ($file != "." && $file != ".." && !is_dir($file)) {
						if ($j == 3 || (($j - 3) % 4) == 0 ) {
							echo "<tr>";
						}
						echo "<td>";
						?>
						<img width="200" src="gallery/<?php echo $file; ?>">
						<?php
						echo "</td>";
						if ($j == 6 || (($j - 6) % 4) == 0 ) {
							echo "</tr>";
						}
					}
				}
			?>
		</table>
		<?php
		closedir($handle);
	}

