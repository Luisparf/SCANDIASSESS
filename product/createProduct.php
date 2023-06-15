
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once 'Furniture.php';
require_once 'Dvd.php';
require_once 'Book.php';

    // Get the form data
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['productType'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $size = $_POST['size'];


    $products = [
        "book" => new Book($sku, $name, $price, $type, $weight), 
        "furniture" => new Furniture($sku, $name, $price, $type, $height, $width, $length ), 
        "dvd" => new DVD($sku, $name, $price, $type, $size)
    ];
    $product = $products[$type];
    $product->save();
    



