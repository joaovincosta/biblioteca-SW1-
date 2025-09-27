<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
<?php
    require 'conexao.php';
    require 'pedaco.php';
    $id = $_GET['id'];
    $novo_titulo = $_POST['novo_titulo'];
    $novo_genero = $_POST['novo_genero'];
    $novo_autor = $_POST['novo_autor'];
    $novo_ano = $_POST['novo_ano'];
    $novo_paginas = $_POST['novo_paginas'];

    $sql = "UPDATE livros
    
    SET titulo = :novo_titulo,
        genero = :novo_genero,
        autor = :novo_autor,
        ano = :novo_ano,
        paginas = :novo_paginas

    WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':novo_titulo', $novo_titulo);
    $stmt->bindParam(':novo_genero', $novo_genero);
    $stmt->bindParam(':novo_autor', $novo_autor);
    $stmt->bindParam(':novo_ano', $novo_ano);
    $stmt->bindParam(':novo_paginas', $novo_paginas);


    if ($stmt->execute()) {
    echo "
    <div class='container my-5'>
      <div class='card text-center'>
        <div class='card-body' class='btn-group' role='group'>
          <h5 class='card-title'>tudo certo!</h5>
          <p class='card-text'>o livro foi atualizado com sucesso.</p>
          <a href='index.php' class='btn btn-danger btn-lg'>voltar à lista</a>
        </div>
      </div>
    </div>
    ";
    } else {
        echo "
        <div class='container my-5'>
        <div class='card text-center'>
            <div class='card-header bg-danger text-white'>
            atualização
            </div>
            <div class='card-body' class='btn-group' role='group'>
            <h5 class='card-title'>ops...</h5>
            <p class='card-text'>ocorreu um erro ao atualizar o livro.</p>
            <a href='form_atualizar.php?id=$id' class='btn btn-danger btn-lg'>Tentar novamente</a>
            </div>
        </div>
        </div>
        ";
    }
?>