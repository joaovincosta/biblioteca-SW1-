<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once 'pedaco.php';
        $id = $_GET['id'];
    ?>
    <h2 class="text-center my-4">formulário para atualização dos livros</h2>
    <div class="container">
        <form action="atualizar.php?id= <?php echo $id; ?>" method="POST">

        <?php
            require 'conexao.php';
            $sql = "SELECT * FROM livros WHERE id = $id";
            $stmt = $pdo->query($sql);
            $livros = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
            
            <div class="mb-3">
                título: <input type="text" name="novo_titulo" value="<?php echo $livros['titulo'];?>" class="form-control">
            </div>
            <div class="mb-3">
                gênero: <input type="text" name="novo_genero" value="<?php echo $livros['genero'];?>" class="form-control">
            </div>
            <div class="mb-3">
                autor: <input type="text" name="novo_autor" value="<?php echo $livros['autor'];?>" class="form-control">
            </div>
            <div class="mb-3">
                ano: <input type="text" name="novo_ano" value="<?php echo $livros['ano'];?>" class="form-control">
            </div>
            <div class="mb-3">
                páginas: <input type="text" name="novo_paginas" value="<?php echo $livros['paginas'];?>" class="form-control">
            </div>
            <button type="submit" class="btn btn-info">atualizar livro</button>
            <a href="index.php" type="button" class="btn btn-warning">voltar</a>
        </form>
    </div>
    <footer></footer>
</body>
</html>