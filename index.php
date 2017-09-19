<?php require("allproducts.php"); ?>
<?php require("helpers.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="/css/styles.css" rel="stylesheet">
	
</head>
<body>
	<h1>Skincare Product Guide</h1>
	
	<form method="GET" action="/">

		<p><!--input type: select-->
			<label for "producttypes">
				<span>Choose category</span>
			</label>
			<select name="producttypes">
				<option value="cleansers">Cleansers</option>
				<option value="toners">Toners</option>
				<option value="moisturizers">Moisturizers</option>
				<option value="eyecreams">Eye Creams</option>
			</select>
		</p>

		<span>Select your skin type</span>
		<!--input type: radio-->
		<p>
			<input type="radio" id="dry" name="skintype" value="dry">
			<label for="dry">Dry</label>
		</p>
		<p>	
			<input type="radio" id="oily" name="skintype" value="oily">
			<label for="oily">Oily</label>
		</p>
		<p>	
			<input type="radio" id="combination" name="skintype" value="combination">
			<label for="combination">Combination</label>
		</p>
		<p>
			<input type="radio" id="normal" name="skintype" value="normal">
			<label for="normal">Normal</label>
		</p>
		

		<!--input type: number-->
		<p>
			<label for="pricerange">
				<span>Price Range (10~100) $<span>
			</label>
			<input type="number" name="pricerange" min="10" max="100" value="<?=sanitize($pricerange)?>">
		</p>

		<p>
			<input type="submit" class="btn" value="Find one for me">
		</p>
	</form>

</body>
</html>