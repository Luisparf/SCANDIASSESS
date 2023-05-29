<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once  __DIR__ . '/../inc/DataBase.php';
$data = $_POST['dataArr'];

Database::removeProducts('product', $data);
?>