<?php
require_once __DIR__ . '/../../config/database.php';

try {
    $stmt = $pdo->query("SELECT 1");
    echo "Conexão com o banco de dados funcionando!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}