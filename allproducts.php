<?php

require("helpers.php");

$productsJson = file_get_contents("products.json");

#var_dump($productsJson); 

$productsArr = json_decode($productsJson, true);

#var_dump($productsArr);

# variable initialization
$producttypes = "";
$skintype = "";
$pricerange = "";
$cleansers = "";
$toners = "";
$moisturizers = "";
$eyecreams = "";
$dry = "";
$oily = "";
$combination = "";
$normal = "";
$ptyperesult = "";


if (isset($_GET["producttypes"])) {
	$producttypes = $_GET["producttypes"];
}

if (isset($_GET["skintype"])) {
	$skintype = $_GET["skintype"];
}

if (isset($_GET["pricerange"])) {
	$pricerange = sanitize($_GET["pricerange"]);
}


if ($producttypes == "cleansers") {
	$cleansers = "SELECTED";
} 
if ($producttypes == "toners") {
	$toners = "SELECTED";
} 
if ($producttypes == "moisturizers") {
	$moisturizers == "SELECTED";
} 
if ($producttypes == "eyecreams") {
	$eyecreams = "SELECTED";
}


if ($skintype == "dry") {
	$dry = "checked";
} 
if ($skintype == "oily") {
	$oily = "checked";
} 
if ($skintype == "combination") {
	$combination = "checked";
} 
if ($skintype == "normal") {
	$normal = "checked";
}

$isMatch = false;
$matchingresultArr = [];

foreach ($productsArr as $ptype => $products) {
	if ($producttypes == $ptype) {
		
		$ptyperesult = $ptype;

		foreach ($products as $index => $item) {
			if ( (in_array($skintype, $products[$index]["skintype"]))
				&& ($pricerange >= $products[$index]["price"]) ) {

				$isMatch = true;
				$matchingresultArr[$index] = [$item];

			}
		}
	}
}




