<?php

$productsJson = file_get_contents("products.json");

#var_dump($productsJson); 

$productsArr = json_decode($productsJson, true);

#var_dump($productsArr);


#$producttypes = $_GET["producttypes"];
#echo "You want to search for: " .$producttypesvalue;

#$skintypevalue = $_GET["skintype"];
#echo "Skin Type Selected: " .$skintypevalue;

#$pricerange = $_GET["pricerange"];
#echo "Price you chose: " .$pricerange;



if (isset($_GET["producttypes"])) {
	$producttypes = $_GET["producttypes"];
	echo "You want to search for: " .$producttypes;
}

if (isset($_GET["skintype"])) {
	$skintype = $_GET["skintype"];
	echo "Skin Type Selected: " .$skintype;
}

if (isset($_GET["pricerange"])) {
	$pricerange = $_GET["pricerange"];
	echo "Price you chose: " .$pricerange;
}


if ($producttypes == "cleansers") {
	$cleansers = "SELECTED";
} else if ($producttypes == "toners") {
	$toners = "SELECTED";
} else if ($producttypes == "moisturizers") {
	$moisturizers == "SELECTED";
} else if ($producttypes = "eyecreams") {
	$eyecreams = "SELECTED";
}



if ($skintype == "dry") {
	$dry = "SELECTED";
} else if ($skintype == "oily") {
	$oily = "SELECTED";
} else if ($skintype == "combination") {
	$combination = "SELECTED";
} else if ($skintype == "normal") {
	$normal = "SELECTED";
}

/*
if (($pricerange > 10) && ($pricerance < 25)) {
	echo "10~25";
} else if ($pricerange >= 25) && ($pricerance < 50) {
	echo "25~50";
}*/









