<?php
$host = 'interchange.proxy.rlwy.net';
$port = 26520;
$user = 'root';
$pass = 'BKKJLNChpEcuTwFsWeyeDjDcPagGzgkr';
$dbname = 'railway';

try {
    echo "Intentando conectar a MySQL en $host:$port...\n";
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "¡Conexión exitosa a la base de datos!\n";
    
    // Prueba básica de consulta
    $stmt = $conn->query("SHOW TABLES");
    echo "Tablas disponibles:\n";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage() . "\n";
}