<title>Вхід</title>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<?php	require_once "dbconnect.php";
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$addres = mysqli_real_escape_string($conn, $_POST['addres']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$sql = "INSERT INTO users (user_firstname, user_lastname, user_phone, user_email, user_city, user_addres, user_password) VALUES ('$firstname', '$lastname', '$phone', '$email', '$city', '$addres', '$password')";
	if (mysqli_query($conn, $sql)) {
		echo '<div class="inputtext"><h3>Вхід:</h3><br>
		<p><a href="account.php">Увійдіть</a> в особистий кабінет</p>';
		} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);	}
mysqli_close($conn); ?>