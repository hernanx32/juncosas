<?php
session_start();

$id_us=$_SESSION['id_usuario'];
$usuario=$_SESSION['usuario'];
$nro_cat=$_SESSION['id_acceso'];
$nomb_acc=$_SESSION['nomb_acceso'];
$nom_completo=$_SESSION['nombre'];

$titulo='Sistema - Principal';
$path='';
$focus='';
$config='';

require 'config/config.php';
include("mod/html.php");
include("mod/conex.php");
include("mod/menu.php");

cabeza($titulo,$path);
menu($nro_cat, $nom_completo , $nomb_acc);


echo "Pag. Principal en Construcción.</br>";






//echo $config['empresa']['nombre'];

$host = $config['database']['host'];
$user = $config['database']['usuario'];
$pass = $config['database']['password'];
$db   = $config['database']['base'];





pieprincipal($focus,$path);

?>