<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
include_once "database.php";

if (!isset($_SESSION)){
	session_start();
}

$conn = open_database();

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password']);


try{
	$result = $conn->query("SELECT id from tbl_usuario where name = '$name' and password = '$password'");
	echo json_encode($result);
	$row = $result->fetch_assoc();
	$id = $row["id"];
	
}catch (Exception $e) {
	echo $e->getMessage();
}

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION["id"] = $id;
	header('Location: dashboard/index.php');
	
} else {
	$_SESSION['sucesso'] = false;
	header('Location: index.php');
	
}


exit();

