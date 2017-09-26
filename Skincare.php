<?php

namespace Findskincare;

class Skincare 
{
	private $productsArr;
	private $isMatch;

	public function __construct($jsonPath) 
	{
		$productsJson = file_get_contents($jsonPath);
		$this->productsArr = json_decode($productsJson, true);
	}

	public function getAllProducts() 
	{
		return $this->productsArr;
	}

	public function isAllMatch() 
	{
		return $this->isMatch;
	}

	public function getUserMatchProducts($producttypes, $skintype, $pricerange)
	{
		$this->isMatch = false;
		$matchingresultArr = [];

		foreach ($this->productsArr as $ptype => $products) {
			if ($producttypes == $ptype) {
		
				$ptyperesult = $ptype;

				foreach ($products as $index => $item) {
					if ( (in_array($skintype, $products[$index]["skintype"]))
						&& ($pricerange >= $products[$index]["price"]) ) {

						$this->isMatch = true;
						$matchingresultArr[$index] = [$item];

					}
				}
			}
		}
		return $matchingresultArr;
	}
}