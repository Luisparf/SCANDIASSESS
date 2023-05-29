<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if (!isset($_SESSION)){
	session_start();
}

/*
echo "verifica_login";
var_dump($_SESSION);
die;
*/
if($_SESSION['id'] == null) {
	header('Location: ../index.php');
	exit();
}





