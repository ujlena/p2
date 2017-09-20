<?php require("allproducts.php"); ?>

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
				<option value="cleansers" <?=$cleansers?> >Cleansers</option>
				<option value="toners" <?=$toners?> >Toners</option>
				<option value="moisturizers"<?=$moisturizers?> >Moisturizers</option>
				<option value="eyecreams" <?=$eyecreams?> >Eye Creams</option>
			</select>
		</p>

		
		<span>Select your skin type</span>
		<!--input type: radio-->
		<p>
			<input type="radio" id="dry" name="skintype" value="dry" <?=$dry?> >
			<label for="dry">Dry</label>
		</p>
		<p>	
			<input type="radio" id="oily" name="skintype" value="oily" <?=$oily?> >
			<label for="oily">Oily</label>
		</p>
		<p>	
			<input type="radio" id="combination" name="skintype" value="combination" <?=$combination?> >
			<label for="combination">Combination</label>
		</p>
		<p>
			<input type="radio" id="normal" name="skintype" value="normal" <?=$normal?> >
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


	<h3>Product matches you .. </h3>
	<?php foreach ($productsArr as $ptype => $products) : ?>
		<?php if ($producttypes == $ptype) : ?>
			<h3>hello: <?=$ptype?></h3>

			<?php foreach ($products as $index => $item) : ?>


				<?php if ( (in_array($skintype, $products[$index]["skintype"]))   
							&& ($pricerange >= $products[$index]["price"]) ): ?>

					<h3>you got it: 
					<?php foreach ($products[$index]["skintype"] as $idx => $val) : ?>
							<?=$val?>
					<?php endforeach; ?>
					<?=$products[$index]["price"] ?>
					</h3>
				<?php endif; ?>

			<?php endforeach; ?>
			
		<?php endif; ?>
	<?php endforeach; ?>

	


	<?php foreach ($productsArr as $ptype => $products) : ?>
		<div class="product">
			<h2>Product Type: <?=$ptype?></h2>
		
			<?php foreach ($products as $index => $item) : ?>
					
					<div class="item">
						<h3>Brand: <?=$products[$index]["brand"]?></h3>
						<h3>Name: <?=$products[$index]["name"]?></h3>
						<h3>Where to buy: <a href="<?=$products[$index]['url']?>">link to official website</a>
						</h3>
						<h3>Price: <?=$products[$index]["price"]?></h3>

						<h3>Skin Type:
						<?php foreach ($products[$index]["skintype"] as $idx => $val) : ?>
							<?=$val?>
						<?php endforeach; ?>
						</h3>
					</div>

			<?php endforeach; ?>
		</div>
	<?php endforeach; ?>




</body>
</html>