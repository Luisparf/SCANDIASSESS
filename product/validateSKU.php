<?php
require_once 'Product.php';
$sku = $_GET['sku'];
$result = Product::exists($sku) ? "true" : "false";
echo $result;






