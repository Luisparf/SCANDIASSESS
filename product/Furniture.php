<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Product.php';
require_once '../inc/DataBase.php';
// use Product;

class Furniture extends Product {
    protected $height;
    protected $width;
    protected $length;

    public function __construct($sku, $name, $price, $type, $height, $width, $length ) {
      parent::__construct($sku, $name, $price, $type);
      $this->height = $height;
      $this->width = $width;
      $this->length = $length;
    }

      // Setters
    public function setHeight($height) {
      $this->height = $height;
    }

    public function setWidth($width) {
      $this->width = $width;
    }

    public function setLength($length) {
      $this->length = $length;
    }

    // Getters
    // public function getSKU(){
    //   return $this->sku
    // }

    public function getHeight() {
      return $this->height;
    }

    public function getWidth() {
      return $this->width;
    }

    public function getLength() {
      return $this->length;
    }

    public function displayProductDetails() {
      parent::displayProductDetails();
      echo "Dimesions: " . $this->getHeight() . "x" .$this->getWidth()  . "x" . $this->getLength() . " <br>";
    }

    public function calculateShippingCost() {
      // Custom logic to calculate shipping cost for furniture
      return 10;
    }

    // Save method
    public function save(){

        $data = array(
            'sku' => $this->getSKU(),
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'type' => $this->getType(),
            'height' => $this->getHeight(),
            'width' => $this->getWidth(),
            'length' => $this->getLength()
         );
        Database::store('products', $data);
    }
}