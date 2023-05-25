<?php


abstract class Product {
  protected $name;
  protected $price;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;

  }

  public function displayProductDetails() {
    echo "Product Name: " . $this->name . "<br>";
    echo "Product Price: $" . $this->price . "<br>";
  }

  abstract public function calculateShippingCost();

  abstract public function save();
}
