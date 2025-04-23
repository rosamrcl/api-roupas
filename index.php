<?php
require 'functions.php';
$produtos = listarProdutos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filhas de D.Helena</title>
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
<section class="product">
    <div class="box">
    <h1 class="heading"> Produtos Cadastrados</h1>
    <table cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Descrição</th>
            <th>Valor</th>
        </tr>
        <?php foreach ($produtos as $produto): ?>
            <tr>
            <td><?= $produto['ID_produto'] ?></td>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['descricao'] ?></td>
            <td><?= $produto['quantidade'] ?></td>
            <td><?= $produto['valor']?></td>            
            <td>
                <a class="btn" href="update.php?id=<?= $produto['ID_produto'] ?>">Editar</a> 
                <a class="delete-btn" href="delete.php?id=<?= $produto['ID_produto'] ?>" onclick="return confirm('Deseja deletar?')">Deletar</a>
            </td>
            </tr>
            <?php endforeach; ?>
    </table>
    </div>
</section>
    
</body>
</html>