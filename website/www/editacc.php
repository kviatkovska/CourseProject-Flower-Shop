<title>Особистий кабінет</title>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<?php require_once "dbconnect.php";
	$user_firstname = mysqli_real_escape_string($conn, $_POST['user_firstname']);
	$user_lastname = mysqli_real_escape_string($conn, $_POST['user_lastname']);
	$user_phone = mysqli_real_escape_string($conn, $_POST['user_phone']);
	$user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
	$user_city = mysqli_real_escape_string($conn, $_POST['user_city']);
	$user_addres = mysqli_real_escape_string($conn, $_POST['user_addres']);
	$user_password = mysqli_real_escape_string($conn, $_POST['user_password']);
	
	$uid = $_GET["uid"]; 
	
	$sql = "UPDATE users SET 
	user_firstname='$user_firstname', 
	user_lastname='$user_lastname',
	user_phone='$user_phone',
	user_email='$user_email',
	user_city='$user_city',
	user_addres='$user_addres',
	user_password='$user_password'
	WHERE user_id='1'";
	if (mysqli_query($conn, $sql)) {
		echo "Ваші дані успішно змінено.";
		} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
mysqli_close($conn); ?>