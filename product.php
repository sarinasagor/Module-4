<?php


class Product {
	// Add properties
	public $id, $name, $price;

	public function __construct( $id, $name, $price ) {
		//: Initialize properties
		$this->id    = $id;
		$this->name  = $name;
		$this->price = $price;
	}


	//Add getFormattedPrice method
	public function getFormattedPrice() {
		return number_format( (float) $this->price, 2, '.', '' );
	}

	//Add showDetails method

	public function showDetails() {
		echo "
        ID: {$this->id}
        Name: {$this->name}
        Price: \${$this->getFormattedPrice()}";

	}
}


// Test the Product class
$product = new Product( 1, 'T-shirt', 19.99 );
$product->showDetails();
