<?php
	/**
	 * Created by PhpStorm.
	 * User: AlexN
	 * Date: 16.02.2016
	 * Time: 4:25
	 */
	/*
	 1. Создать контактную форму. Сделать так, чтобы один посетитель не мог отправить форму
	больше 3 раз за одну минуту.
	*/
	header("Locatioh: 1.php");
	$count = 0;
	$time_cookie = time() + 60;
	$cur_time_user = 0;

	if (isset($_COOKIE['count'])){
		$count = $_COOKIE['count'];
	}

	if (!isset($_COOKIE['time'])){
		SetCookie("time", $time_cookie);
	}

	if ($count < 3 && (isset($_COOKIE['time']))) {
		SetCookie("count", $count + 1);
	} else {
		die("Количество посещений достигло {$count} или время куки истекло!");
	}
	SetCookie("count", $count + 1, $time_cookie);

	echo @$_COOKIE['count'];
?>

<form action="" method="get">
	<input type="text" name="text" id="text">
	<br>
	<button type="submit">Отправить</button>
</form>