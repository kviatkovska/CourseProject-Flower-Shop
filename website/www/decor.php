<title>Декор</title>
<link rel="icon" href="../img/icon.svg" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="../css/style.css" >
<?php require "elements/header.php" ?>
<h1 align="center">дозвольте прикрасити ваше свято</h1> 
<?php require_once "dbconnect.php";
	$sql = "SELECT * FROM decor";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "";
		while($row = $result->fetch_assoc()) {
			echo '<div class="product-wrap2">
			<div class="product-item">
			<img src="../img/' . $row["decor_foto"].'"  width="250" height="550">
			<div class="product-buttons">
			<a href="" class="button2">' . $row["decor_descr"].'</a>
			</div>
			</div>
			<div class="product-title">
			<a href="">'. $row["decor_price"].'</a>
			<span class="product-price">'. $row["decor_name"].'</span>
			</div>
		</div>';  }
	} else {  echo "0 results"; } ?>	