
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once 'Furniture.php';
require_once 'Dvd.php';
require_once 'Book.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['productType'];

    // Create a new instance based on the selected product type
    if ($type === 'book') {
        $weight = $_POST['weight'];
        $product = new Book($sku, $name, $price, $type, $weight);
    } elseif ($type === 'furniture') {
        $height = $_POST['height'];
        $width = $_POST['width'];
        $length = $_POST['length'];
        $product = new Furniture($sku, $name, $price, $type, $height, $width, $length );
    } elseif ($type === 'dvd') {
        $size = $_POST['size'];
        $product = new DVD($sku, $name, $price, $type, $size);
    } else {
        // Invalid product type, handle the error
        echo "Invalid product type";
        exit;
    }

    // Save the product
    $product->save();


}
