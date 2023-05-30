<?php
require_once 'Product.php';

$result = "";

if(isset($_GET['sku_consult'])){
    $sku = $_GET['sku_consult'];
    $result = Product::validateSKU($sku);
    if($result){
        $result = "true";
    }else{
        $result = "false";
    }
}

echo $result;
