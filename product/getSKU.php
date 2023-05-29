<?php
    require_once  __DIR__ . '/../inc/DataBase.php';


    $result = "";

    if(isset($_GET['sku_consult'])){
        $sku = $_GET['sku_consult'];
        $result = Database::executeQuery("SELECT sku FROM product WHERE sku = '" . $sku ."'");
        if($result){
            $result = "true";
        }else{
            $result = "false";
        }
    }

   echo $result;
