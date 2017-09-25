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
				<option value="moisturizers" <?=$moisturizers?> >Moisturizers</option>
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


	<div id="result">
		<h2>Product matches you .. </h2>
		<div class="product">
			
			<h2>Product Type: <?=$ptyperesult?></h2>

			<div class="item">

				<?php foreach ($matchingresultArr as $index => $productVal) : ?>
					
					<h3>Brand : <?=$matchingresultArr[$index][0]["brand"]?></h3>
					<h3>Product : <?=$matchingresultArr[$index][0]["name"]?></h3>
					<h3>Where to buy : <a href="<?=$matchingresultArr[$index][0]["url"]?>">website</a></h3>
					<h3>Price : $<?=$matchingresultArr[$index][0]["price"]?></h3>
					<h3 id="lastchild">SkinType : 
						<?php foreach ($matchingresultArr[$index][0]["skintype"] as $idx => $val) : ?>
							<?=$val?>
						<?php endforeach; ?>
					</h3>
				<?php endforeach; ?>

				<?php if (!$isMatch) : ?>
					<p>Sorry we can't find you one yet.</p>
				<?php endif; ?>
			</div>
		</div>

	</div>

</body>
</html>