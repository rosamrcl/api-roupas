<?php
require_once ('./functions.php');

$id = $_GET['id'] ?? null;
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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api Roupas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./resources/css/style.css">
</head>
<body>
<header class="header">    
        <a href="#" class="logo">API Roupas</a>
        <nav class="navbar">
        <a href="./create.php">Adicionar produtos</a>
        <a href="./index.php">Todos os produtos</a>          
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>  
</header>
    <section class="add-product">
        <form method="post">
            <h3>Detalhes do produto</h3>            
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required maxlength="50" class="box" placeholder="Digite o nome do produto" value="<?= $produto['nome'] ?>"
            <label for="descricao">Descrição:</label>            
            <input type="text" name="descricao" required maxlength="50" class="box" placeholder="Descreva o produto" value="<?= $produto['descricao'] ?>">              
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" required maxlength="10" min="0" max="9999999999" class="box" placeholder="Digite quantidade do produto" value="<?= $produto['quantidade'] ?>">           
            <label for="valor">Valor:</label>
            <input type="number" name="valor" step="0.010"  required maxlength="10" min="0" max="9999999999" class="box" placeholder="Digite o valor do produto" value="<?= $produto['valor'] ?>">            
            <button class="btn" type="submit">Atualizar</button>
        </form>
    </section>
   
</body>
</html>