<?php session_start(); ?>
<title>Особистий кабінет</title>
<link rel="icon" href="../img/acc.svg" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<style type="text/css">
	body {
	background: url(../img/bg11.jpg);
	background-attachment: fixed;
	background-size: cover; }
</style>
<?php require "/elements/header.php" ?>
<?php require "login.php" ;
	$uid = $_GET["uid"]; 
	if (! empty($_SESSION['success'])) {	?>
	<h1 align="center">Ваші дані</h1><div class="forms">
		<?php require_once "dbconnect.php";
			$sql = "SELECT * FROM users WHERE user_email={$uid}";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
				echo "";
				while($row = $result->fetch_assoc()) {
					echo "<form action='editacc.php' method='post'>
					<p>Ім'я: <input type='text' name='user_firstname' value='" . $row["user_firstname"]. "' required><input type='submit' value='Змінити'></p>
					<p>Прізвище: <input type='text' name='user_lastname' value='" . $row["user_lastname"]. "' required><input type='submit' value='Змінити'></p>
					<p>Телефон: <input type='text' name='user_phone' value='" . $row["user_phone"]. "' required><input type='submit' value='Змінити'></p>
					<p>Пошта: <input type='text' name='user_email' value='" . $row["user_email"]. "' required><input type='submit' value='Змінити'></p>
					<p>Місто: <input type='text' name='user_city' value='" . $row["user_city"]. "' required><input type='submit' value='Змінити'></p>
					<p>Адреса: <input type='text' name='user_addres' value='" . $row["user_addres"]. "' required><input type='submit' value='Змінити'></p>
				<p>Пароль: <input type='password' name='user_password' value='" . $row["user_password"]. "' required><input type='submit' value='Змінити'></p></form>";	}	}
		$conn->close();		?>
	<a href="logout.php">Вийти</a></div>
	<?php	}	else { ?>
	<h1 align="center">Увійти до особистого кабінету</h1><div class="enter"><br>
		<form action="login.php" method="post">		
			<input type="text" name="user_email" value="" placeholder="Ваш email*" required><br>
			<input type="password" name="user_password" value="" placeholder="Ваш пароль*" required><br>
			<input type="submit" value="Увійти">
			<p>якщо у Вас немає аккаунта<br><a href="registration.php">Зареєструйтеся</a></p>
		</form>
	</div>	<?php	} ?>			