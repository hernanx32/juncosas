<?php
session_start();
$titulo='Sistema - Inicio';
$path='';
								//Caracteristicas Principales
require_once 'config/config.php';    //require: Si el archivo no existe: Error fatal y el script se detiene			Uso recomendado:Archivos indispensables
include_once("mod/html.php");		//include: Si el archivo no existe: Advertencia (Warning) y el script continúa	Uso recomendado:Archivos opcionales
include_once("mod/conex.php");		



cabeza($titulo,$path);

if (isset($_GET['msj']))
{
    $mensaje="<strong><span style='color: red;'>¡El Usuario y Clave son Incorrectos!..</span></strong>";    
   
} else {
    $mensaje="<strong><span style='color: Green;'>Bienvenido..</span></strong>";  
}

if (!isset($_GET['scr'])){
    
    include("mod/login/login.php");
    $focus='usuario';
}else{
    $scr=$_GET['scr'];

    if ($scr=="ingresar"){
        include("mod/login/ingresar.php");
        $focus='usuario';   
    }
    if($scr=="olvidoclave"){
    include("mod/login/olvidoclave.php");
    $focus='correo';
    }
	if($scr=="datos"){
    include("mod/login/datos.php");
    $focus='volver';
    }
	
	
	
	
}

echo "Estado de Conexión: ".$EstCon ;
pieindex($focus,$path);

?>