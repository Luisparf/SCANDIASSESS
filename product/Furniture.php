<?php

require_once 'Product.php';

class Furniture extends Product {
  protected $height;
  protected $width;
  protected $length;

  public function __construct($name, $price, $height, $width, $length ) {
    parent::__construct($name, $price);
    $this->height = $height;
    $this->width = $width;
    $this->length = $length;
  }

  public function displayProductDetails() {
    parent::displayProductDetails();
    echo "Dimesions: " . $this->height . "x" .$this->width . "x" . $this->length . " <br>";
  }

  public function calculateShippingCost() {
    // Custom logic to calculate shipping cost for furniture
    return 10;
  }

  public function save(){
    // Connect to the database (replace with your database credentials)
      $conn = new mysqli('localhost', 'root', '', 'scandiweb');

      // Check for connection errors
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Prepare the SQL statement
      $stmt = $conn->prepare("INSERT INTO products (sku, name, price, type, author, material, size) VALUES (?, ?, ?, ?, ?, ?, ?)");

      // Bind the parameters
      $stmt->bind_param("ssdsssd", $this->sku, $this->name, $this->price, $this->type, $this->author, $this->material, $this->size);

      // Execute the statement
      $stmt->execute();

      // Close the statement and connection
      $stmt->close();

      $conn->close();
      }
}