<title>Корзина</title>          
<link rel="icon" href="../img/cart.svg" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<?php require "/elements/header.php" ?>
<h1 align="center">перегляд обраних товарів</h1> 
<?php $flowerid = $_GET["fid"]; ?>
<form method="post" action="cart.php?page=cart">
	<div class="ci">
		<div class="product-wrap">   
			<?php require_once "dbconnect.php";
				$sql="SELECT * FROM flowers WHERE flower_id = {$flowerid}"; 
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_array()) { 
						echo '<div class="product-item">
						<img src="../img/' . $row['flower_foto'].'">
						<div class="product-buttons">
						<a href="cart.php" class="button">Видалити</a>
						</div>
						</div>
						<div class="product-title">
						<a href="">'. $row['flower_name'].'</a>
						<span class="product-price">'. $row['flower_price'].' UAN</span>
					<a href="order.php" class="cartbutton">Оформити замовлення</a></div>';	}
					}else{ 
				echo '<p><b><div class="cartbutton">У вашій корзині немає товарів</div><br><a href="flowers.php" class="mainbutton">в магазин</a></b></p>'; }  ?> 
		</div>
	</div>
</form>