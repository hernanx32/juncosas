<?PHP

$config = json_decode(file_get_contents('config.json'), true);

$config['empresa']['nombre'] = "Junco SAS.";







file_put_contents('config.json',json_encode($config, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "Archivo Modificado con Exito";
?>