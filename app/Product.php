<?php
namespace App;
class Product
{
	protected $name, $price;
	function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	function name(){
		return $this->name;
	}

	function price(){
		return $this->price;
	}
}