<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 16.02.2016
	 * Time: 13:35
	 */
	/*
	3. Сделать выпадающий список со списком цветов (красный, синий, желтый и т.д.).
			После выбора цвета и отправки формы надо:
					1) запоминать цвет в cookies и выводить на странице текст Lorem Ipsum в выбранном
							цвете;
					2) если был выбран цвет, например, желтый, то при следующей загрузке страницы
							должен быть тоже выбран желтый в выпадающем списке.
						 То есть, необходимо проставлять selected="seleted" для выбранного пункта в
							выпадающем списке. То есть, сохранять выбранное значение при перезагрузке
							страницы.
	*/
	$colors = array("Красный" => "red", "Синий" => "blue", "Зелёный" => "green");

	if (isset($_POST['color'])) {
		SetCookie("color", $_POST['color']);
	}

	if ($_POST) {
		header("Location: 3.php");
	}
?>

<form action="" method="post">
	<select name="color">

		<?php
			foreach ($colors as $key => $color) { ?>
				<?php $res = ($_COOKIE['color'] == $color); ?>
				<option
						value="<?= $color; ?>"<?php if($res == 1) {echo 'selected="selected"';}?>>
					<?= $key; ?>
				</option>
			<?php } ?>
	</select>
	<br>
	<button type="submit">Отправить</button>
</form>

<p style="color:<?= $_COOKIE['color']; ?>">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam id quis sed veniam
	voluptates. Distinctio, provident, veniam. Accusantium architecto asperiores
	consequuntur doloremque, ea explicabo impedit omnis, quasi rerum ut veniam.
</p>
