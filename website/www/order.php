<?php session_start(); ?>
<title>Оформити замовлення</title>
<link rel="icon" href="../img/cart.svg" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<?php require "/elements/header.php" ?>
<h1 align="center">Введіть наступні дані, щоб оформити замовлення</h1>
<div class="forms">
	<form action="" method="post">
		Ім'я: <input type="text" name="firstname" required><br>
		Прізвище: <input type="text" name="lastname" required><br>
		Телефон: <input type="text" name="phone" required><br>
		Email: <input type="text" name="email" required><br>
		Місто: <input type="text" name="city" required><br>
		Адреса: <input type="text" name="addres" required><br>
		Спосіб оплати: <select id="cars">
			<option value="0"></option>
			<option value="1">Готівка</option>
			<option value="2">Банківська карта</option>
			<option value="3">Переказ на карту</option>
		</select><br>
		<input type="submit" value="Замовити">
	</form>
</div>
<?php require_once "elements/footer.php" ?>