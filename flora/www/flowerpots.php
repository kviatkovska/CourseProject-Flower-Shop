<title>Кімнатні рослини</title>
<link rel="icon" href="../img/icon.svg" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="../css/style.css" >
<?php require "elements/header.php" ?>
<h1 align="center">рослини для вашого дому</h1> 
<?php require_once "dbconnect.php";
	$sql = "SELECT * FROM flowerpots";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		echo "";
		while($row = $result->fetch_array()) {
			echo '<div class="product-wrap">
			<div class="product-item">
			<img src="../img/' . $row['flowerpot_foto'].'">
			<div class="product-buttons">
			<a href="cart.php?fpid='. $row['flowerpot_id'].'" target="_blank" class="button">Купити</a>
			</div>
			</div>
			<div class="product-title">
			<a href="">'. $row['flowerpot_name'].'</a>
			<span class="product-price">'. $row['flowerpot_price'].'UAN</span>
			</div>
		</div>';  }	} ?>												