<?php
// Datos de conexión
$host = "127.0.0.1";
$user = "root";
$pass = "LauLukLulu477!";
$db   = "bases";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    // Si hay error de conexión, responder JSON para que DataTables no rompa en silencio
    header('Content-Type: application/json');
    echo json_encode(["error" => $e->getMessage()]);
    exit;
}

// Parámetros de DataTables
$draw        = isset($_GET['draw']) ? intval($_GET['draw']) : 1;
$start       = isset($_GET['start']) ? intval($_GET['start']) : 0;
$length      = isset($_GET['length']) ? intval($_GET['length']) : 10;
$searchValue = isset($_GET['search']['value']) ? trim($_GET['search']['value']) : '';

// 1. Total de registros en la tabla usuario[cite: 1]
$totalRecords = $pdo->query("SELECT COUNT(id_usuario) FROM usuario")->fetchColumn();[cite: 1]

// 2. Construcción de filtro de búsqueda
$where = "";
$params = [];

if (!empty($searchValue)) {
    $where = " AND (id_usuario LIKE :search OR usuario LIKE :search OR nombre LIKE :search OR id_sucursal LIKE :search OR id_acceso LIKE :search)";[cite: 1]
    $params[':search'] = "%$searchValue%";
}

// Total de registros filtrados (se le pasa el arreglo $params correcto)
$stmtFiltered = $pdo->prepare("SELECT COUNT(id_usuario) FROM usuario WHERE 1=1 " . $where);[cite: 1]
$stmtFiltered->execute($params);
$totalRecordsFiltered = $stmtFiltered->fetchColumn();

// 3. Consulta final con paginación limpia sin bindParam ambiguos
$sql = "SELECT id_usuario, usuario, nombre, id_sucursal, id_acceso FROM usuario WHERE 1=1 " . $where . " ORDER BY id_usuario DESC LIMIT :start, :length";[cite: 1]
$stmt = $pdo->prepare($sql);

if (!empty($searchValue)) {
    $stmt->bindValue(':search', "%$searchValue%", PDO::PARAM_STR);
}
$stmt->bindValue(':start', (int)$start, PDO::PARAM_INT);
$stmt->bindValue(':length', (int)$length, PDO::PARAM_INT);
$stmt->execute();

$data = $stmt->fetchAll();

// Salida en formato JSON
header('Content-Type: application/json');
echo json_encode([
    "draw"            => $draw,
    "recordsTotal"    => intval($totalRecords),
    "recordsFiltered" => intval($totalRecordsFiltered),
    "data"            => $data
]);