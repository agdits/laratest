<?php

use App\Order;
use App\Product;
class OrderTest extends PHPUnit_Framework_TestCase
{
	
	/** @test */

	function an_order_consists_of_products(){
		$order = new Order;

		$product1 = new Product('Fallout 4', 55);
		$product2 = new Product('Pillocase', 13);

		$order->add($product1);
		$order->add($product2);

		$this->assertCount(2, $order->products());

	}

	/** @test */

	function an_order_can_determine_the_total_cost_of_all_its_products(){
		$order = new Order;

		$product1 = new Product('Fallout 4', 55);
		$product2 = new Product('Pillocase', 13);

		$order->add($product1);
		$order->add($product2);

		$this->assertEquals(68, $order->total());
	}
}