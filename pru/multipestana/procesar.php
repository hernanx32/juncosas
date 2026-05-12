<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $domicilio = $_POST['domicilio']; // Puede estar vacío
    $cuit = $_POST['cuit'];
    $ip = $_POST['ip_servidor'];
    $db = $_POST['db_nombre'];

    // Aquí puedes realizar una segunda validación de seguridad en el servidor
    if (empty($nombre) || empty($cuit) || empty($ip) || empty($db)) {
        echo "Error: Faltan datos obligatorios.";
    } else {
        echo "Datos recibidos con éxito: <br>";
        echo "Nombre: $nombre, CUIT: $cuit, IP: $ip";
    }
}
?>