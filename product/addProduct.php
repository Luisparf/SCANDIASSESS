
<?php

require_once 'Product.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $sku = $_POST['sku'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $type = $_POST['productType'];

  // Create a new instance based on the selected product type
  if ($type === 'book') {
    $weight = $_POST['weight'];
    $product = new Book($name, $price, $weight);
  } elseif ($type === 'furniture') {
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $product = new Furniture($name, $price, $height, $width, $length);
  } elseif ($type === 'dvd') {
    $size = $_POST['size'];
    $product = new DVD($name, $price, $size);
  } else {
    // Invalid product type, handle the error
    echo "Invalid product type";
    exit;
  }

  // Save the product
  $product->save();
}

?>