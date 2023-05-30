<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once 'Product.php';
$data = $_POST['dataArr'];
Product::massDelete($data);
?>