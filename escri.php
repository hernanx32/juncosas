<?php
function guardar_ini($archivo, $array_datos) {
    $contenido = "";
    
    foreach ($array_datos as $seccion => $valores) {
        $contenido .= "[$seccion]\n"; // Escribir el nombre de la sección
        foreach ($valores as $clave => $valor) {
            // Si el valor es un número no lleva comillas, si es texto sí
            if (is_numeric($valor)) {
                $contenido .= "$clave = $valor\n";
            } else {
                $contenido .= "$clave = \"$valor\"\n";
            }
        }
        $contenido .= "\n"; // Espacio entre secciones
    }
    
    // Guardar el string resultante en el archivo
    return file_put_contents($archivo, $contenido);
}

// --- EJEMPLO DE USO (CREAR O EDITAR) ---

// 1. Cargamos lo que ya existe
$config = parse_ini_file("config.ini", true);

// 2. Modificamos o agregamos valores
$config['ajustes']['usuario'] = "Juan_Perez"; // Editamos uno existente
$config['ajustes']['ultimo_login'] = "2026-04-30"; // Agregamos uno nuevo
$config['servidor']['ip'] = "localhost"; // Creamos una sección nueva
$config['datos']['rsocial'] = "Junco SAS."; // Creamos una sección nueva


// 3. Guardamos los cambios
if (guardar_ini("config.ini", $config)) {
    echo "Configuración actualizada con éxito.";
}
?>