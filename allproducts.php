<?php

require("helpers.php");
require("Skincare.php");

use Findskincare\Skincare;

/*
$productsJson = file_get_contents("products.json");
$productsArr = json_decode($productsJson, true);
*/
$skincare = new Skincare("products.json"); //instantiate new object


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
} else {
	$producttypes = "";
}

if (isset($_GET["skintype"])) {
	$skintype = $_GET["skintype"];
} else {
	$skintype = "";
}

if (isset($_GET["pricerange"])) {
	$pricerange = sanitize($_GET["pricerange"]);
} else {
	$pricerange = "";
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


$matchingresultArr = $skincare->getUserMatchProducts($producttypes, $skintype, $pricerange);

$isMatch = $skincare->isAllMatch();




