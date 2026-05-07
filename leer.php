<?php
// Leer el archivo a un array
$config = parse_ini_file("config.ini", true);

// Acceder a los datos
echo $config['ajustes']['usuario']; 
echo "<br>";

echo $config['datos']['rsocial']; 

?>