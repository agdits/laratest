<?php
namespace App;
class Order
{

	protected $products = [];

	function add(Product $product){
		$this->products[] = $product;
	}

	function products(){
		return $this->products;
	}

	function total(){
		return array_reduce($this->products, function($total, $product){
			return $total + $product->price();
		});
	}

	/*
	function total(){
		$total = 0;
		foreach ($this->products as $product) {
			$total += $product->price();
		}

		return $total;
	}
	*/
}