<?php

require_once 'Product.php';


class Book extends Product {
  protected $weight;

  public function __construct($name, $price, $weight) {
    parent::__construct($name, $price);
    $this->weight = $weight;
  }

  public function displayProductDetails() {
    parent::displayProductDetails();
    echo "Weight: " . $this->weight. "Kgs. <br>";
  }

  public function calculateShippingCost() {
    // Custom logic to calculate shipping cost for books
    return 2.5;
  }

  public function save(){

  }
}