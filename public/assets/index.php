<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/config.php';

// Roteamento básico
$url = $_GET['url'] ?? 'home';

switch ($url) {
    case 'home':
        echo "Página Inicial";
        break;
    case 'api':
        require __DIR__ . '/../api/v1/example.php';
        break;
    default:
        http_response_code(404);
        echo "Página não encontrada";
        break;
}