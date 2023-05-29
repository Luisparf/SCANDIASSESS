<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once  __DIR__ . '/../inc/DataBase.php';


abstract class Product {
    protected $sku;
    protected $name;
    protected $price;
    protected $type;

    public function __construct($sku, $name, $price, $type) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }
    public function setSKU($sku) {
        $this->sku = $sku;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function setType($type) {
        $this->type = $type;
    }

    // Getters
    // public function getSKU(){
    //   return $this->sku
    // }

    public function getSKU() {
        return $this->sku;
    }
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getType() {
        return $this->type;
    }

    public static function all(){
        return  Database::all('product');
    }



    public function displayProductDetails() {
        echo "Product Name: " . $this->getName() . "<br>";
        echo "Product Price: $" . $this->getPrice() . "<br>";
    }

    abstract public function calculateShippingCost();

    abstract public function save();
}
