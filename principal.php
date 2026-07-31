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


include($path."mod/html.php");
include($path."mod/conex.php");
include($path."mod/menu.php");

cabeza($titulo,$path);
menu($nro_cat, $nom_completo , $nomb_acc);
echo $nro_cat;	

echo "Pag. Principal en Construcción.";



pieprincipal($focus,$path);

?>