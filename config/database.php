<?php
try{
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";post=" . DB_PORT . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
}catch(PODEexception $e)  {
    dia ("Erro na conexão: " . $e->getMessage());
}