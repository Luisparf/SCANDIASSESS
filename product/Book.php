<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once '../inc/DataBase.php';
require_once 'Product.php';


class Book extends Product {
    protected $weight;

    public function __construct($sku, $name, $price, $type, $weight) {
        parent::__construct($sku, $name, $price, $type);
        $this->weight = $weight;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function displayProductDetails() {
        parent::displayProductDetails();
        echo "Weight: " . $this->getWeight(). "Kgs. <br>";
    }

    public function calculateShippingCost() {
        // Custom logic to calculate shipping cost for books
        return 2.5;
    }

    public function save(){

        $data = array(
            'sku' => $this->getSKU(),
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'type' => $this->getType(),
            'weight' => $this->getWeight(),
        );
        Database::store('product', $data);

    }
}