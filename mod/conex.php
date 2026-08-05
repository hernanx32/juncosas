<?php
global $EstCon, $conn;

$host = $config['database']['host'];
$user = $config['database']['usuario'];
$pass = $config['database']['password'];
$db   = $config['database']['base'];


$conn= new mysqli($host, $user, $pass, $db);
$conn->set_charset("utf8");


if($conn->connect_error){
	die('Error de Conexion '.$conn->connect_error);
	$EstCon = 'Error';
}else{
	$EstCon = 'OK';
	
}


?>