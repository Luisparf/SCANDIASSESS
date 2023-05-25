<?php

require_once 'Product.php';

class DVD extends Product {
  protected $size;

  public function __construct($name, $price, $size) {
    parent::__construct($name, $price);
    $this->size = $size;
  }

  public function displayProductDetails() {
    parent::displayProductDetails();
    echo "Size: " . $this->size . " Mbs <br>";
  }

  public function calculateShippingCost() {
    // Custom logic to calculate shipping cost for DVDs
    return 1.5;
  }
}