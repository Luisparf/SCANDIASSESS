<?php
require_once '../inc/DataBase.php';
require_once 'Product.php';

class DVD extends Product {
  protected $size;

  public function __construct($sku, $name, $price, $type, $size) {
    parent::__construct($sku, $name, $price, $type);
    $this->size = $size;
  }

  public function getSize(){
    return $this->size;
  }

  public function setSize($size) {
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

  public function save(){
    $db = new DataBase();
        $data = array(
          'sku' => $this->getSKU(),
          'name' => $this->getName(),
          'price' => $this->getPrice(),
          'type' => $this->getType(),
          'size' => $this->getSize(),
         );
        $db->save('dvd', $data);
        $db->closeConnection();
    }
}
