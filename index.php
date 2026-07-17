<?PHP
session_start();
$titulo='Sistema - Inicio';
$path='';
$mensaje='';

include("mod/basico.php");
include("mod/conex.php");

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
}
	
	
	
	echo "<BR>";
	echo "Servidor:".$config['servidor']['ip']; 
	echo " - Estado de Conexion:". $EstCon; 
	
	?>
</body>
</html>