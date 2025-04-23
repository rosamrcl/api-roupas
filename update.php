<?php
require 'functions.php';

$id = $_GET['id'];
$produto = buscarProduto($id);

if(!$produto){
    echo "<h3>Produto não encontrado!</h3>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    atualizarProduto($id, $_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['valor']);
    header("Location: index.php");
    exit;
}
?>

<h2>Editar Usuário</h2>
<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $produto['nome'] ?>" required><br><br>
    Descrição: <input type="text" name="descricao" value="<?= $produto['descricao'] ?>" required><br><br>
    Quantidade: <input type="number" name="quantidade" value="<?= $produto['quantidade'] ?>" required><br><br>
    Valor: <input type="number" name="valor" value="<?= $produto['valor']?>" required><br><br>
    <button type="submit">Atualizar</button>
</form>