<?php session_start(); ?>
<title>Реєстрація</title>
<link rel="icon" href="../img/acc.svg" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<?php require "/elements/header.php" ?>
<h1 align="center">Введіть наступні дані, щоб зареєструватися</h1>
<div class="forms">
	<form action="adduser.php" method="post">
		Ім'я: <input type="text" name="firstname" required><br>
		Прізвище: <input type="text" name="lastname" required><br>
		Телефон: <input type="text" name="phone" required><br>
		Email: <input type="text" name="email" required><br>
		Місто: <input type="text" name="city" required><br>
		Адреса: <input type="text" name="addres" required><br>
		Пароль: <input type="password" name="password" required><br>
		<input type="submit" value="Зареєструватися">
	</form>
	<p><a href="account.php">Увійдіть</a> якщо у Вас вже є аккаунт</p>
</div>