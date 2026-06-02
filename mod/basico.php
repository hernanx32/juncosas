<?PHP
function cabeza($titulopag, $path)
{
	//Configuramos la hora Segun la Zona Horario 
	global $fecha_form;
	global $fecha_corta;
	global $config;
	
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	$fecha_form = date('Y-m-d');
	$fecha_corta = date('d-m-Y');
	
	//LLAMAMOS EL CONFIG.INI
	$config = parse_ini_file("config.ini", true); 
	
	//LLAMAMOS AL HTML BASICO Y CARGAMOS LA VAR $TITULO_PAG	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $titulopag; ?></title>
</head>
	
<?PHP 
// RETORNAMOS LA VARIABLE PARA PODER USARLA FUERA
    return $config;
}
