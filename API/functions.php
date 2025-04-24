<?php
require_once 'db.php';

function salvarEmJSON($dados) {
    file_put_contents('data.json', json_encode($dados, JSON_PRETTY_PRINT));
}

function listarProdutos() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM produtos");
    $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    salvarEmJSON($produtos);
    return $produtos;
}

function cadastrarProduto($nome, $descricao, $quantidade, $valor) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO produtos (nome, descricao, quantidade, valor) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nome, $descricao, $quantidade, $valor]);
}

function buscarProduto($nome) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM produtos WHERE nome) = ?");
    $stmt->execute([$nome]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function atualizarProduto($id, $nome, $descricao, $quantidade, $valor) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE produtos SET nome = ?, descricao = ?, quantidade = ?, valor = ? WHERE ID_produto = ?");
    $stmt->execute([$nome, $descricao, $quantidade, $valor, $id]);
}

function deletarProduto($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM produtos WHERE id = ?");
    $stmt->execute([$id]);
}