<?php

namespace Product;

class ProductController extends Product{

    // #sku validator
    // require_once 'Product.php';
    // $result = Product::exists($$_GET['sku']) ? "true" : "false";
    // echo $result;

    // #deleter
    // public function massDeleter($products){
    //     // $products = $_POST['dataArr'];
    //     $this->massDelete($products);
    // }

    // #createProduct

     // Get the form data
    // $sku = $_POST['sku'];
    // $name = $_POST['name'];
    // $price = $_POST['price'];
    // $type = $_POST['productType'];
    // $weight = $_POST['weight'];
    // $height = $_POST['height'];
    // $width = $_POST['width'];
    // $length = $_POST['length'];
    // $size = $_POST['size'];


    // $products = [
    //     "book" => new Book($sku, $name, $price, $type, $weight), 
    //     "furniture" => new Furniture($sku, $name, $price, $type, $height, $width, $length ), 
    //     "dvd" => new DVD($sku, $name, $price, $type, $size)
    // ];
    // $product = $products[$type];
    // $product->save();

    public function create(){
        
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

    }


}