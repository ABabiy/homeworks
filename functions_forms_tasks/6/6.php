<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 07.02.2016
	 * Time: 4:21
	 */

	/*
	 6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.
	Все загруженные фото должны помещаться в папку gallery и выводиться на странице в
	виде таблицы.
	*/ ?>

<form action="6-1.php" method="post" enctype="multipart/form-data">
	<input type="file" name="filename[]" multiple>
	<br>
	<br>
	<button type="file"> Отправить</button>
</form>

