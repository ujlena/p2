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
	$dry = "SELECTED";
} 
if ($skintype == "oily") {
	$oily = "SELECTED";
} 
if ($skintype == "combination") {
	$combination = "SELECTED";
} 
if ($skintype == "normal") {
	$normal = "SELECTED";
}









