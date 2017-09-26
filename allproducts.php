<?php

require("helpers.php");
require("Skincare.php");
require("Form.php");

use Findskincare\Skincare;
use DWA\Form;


$skincare = new Skincare("products.json"); //instantiate new object
$form = new Form($_GET); //pass Get or POST


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


$producttypes = $form->get("producttypes", "");
$skintype = $form->get("skintype", "");
$pricerange = $form->get("pricerange", "");


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

# Validate
if ($form->isSubmitted()) {
	$errors = $form->validate([
		"skintype" => "required",
		"pricerange" => "numeric|min:10|max:100"
	]);
}

$matchingresultArr = $skincare->getUserMatchProducts($producttypes, $skintype, $pricerange);

$isMatch = $skincare->isAllMatch();




