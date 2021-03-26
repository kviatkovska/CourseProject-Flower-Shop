<?php session_start(); ?>
<title>Вхід</title>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<?php
	session_unset();
	session_destroy();
?>
<div class="inputtext"><h3>Вхід:</h3><br>
	<?php
		echo 'Ви вийшли з кабінету. <a href="http://www.flora/account.php">Повернутись.</a>';
	?>
</div>
