<?php session_start();  ?>
<?php
	if(count($_POST)>0) {
		$conn = mysqli_connect("localhost", "root", "", "floradb");
		$result = mysqli_query($conn, "SELECT user_email, user_password FROM users WHERE user_email ='" . $_POST["user_email"] . "' and user_password = '". $_POST["user_password"]."'");
		$count  = mysqli_num_rows($result);
		if($count==0) {
			header ("Location: http://www.flora/");	
			} else {
			$_SESSION['user_email'] = $user_email;
			$_SESSION['success'] = "You are now logged in";
		header ("Location: http://www.flora/account.php?uid='" . $_POST["user_email"] . "'"); } } ?>		