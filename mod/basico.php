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

	<!--
  	<link rel="stylesheet" href="/juncosas/css/google.css">
  	<link rel="stylesheet" href="/juncosas/css/fontawesome-free/all.min.css">
	<link rel="stylesheet" href="/juncosas/css/adminlte/adminlte.min.css">	
	-->
	<link rel="stylesheet" href="../comp/google.css">
  	<link rel="stylesheet" href="../comp/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="../comp/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../comp/dist/css/adminlte.min.css">	
    <link rel="stylesheet" href="../comp/plugins/select2/css/select2.min.css">
	
<?PHP 
}
