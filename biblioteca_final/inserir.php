<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
<?php
    require 'conexao.php';
    require 'pedaco.php';
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $paginas = $_POST['paginas'];

    $sql = "INSERT INTO livros (titulo, genero, autor, ano, paginas) VALUES (:titulo, :genero, :autor, :ano, :paginas)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':paginas', $paginas);

    if ($stmt->execute()) {
    echo "
    <div class='container my-5'>
      <div class='card text-center'>
        <div class='card-body' class='btn-group' role='group'>
          <h5 class='card-title'>tudo certo!</h5>
          <p class='card-text'>o livro foi cadastrado com sucesso.</p>
          <a href='index.php' class='btn btn-danger btn-lg'>voltar</a>
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
            <p class='card-text'>ocorreu um erro ao cadastrar o livro.</p>
            <a href='index.php' class='btn btn-danger btn-lg'>tentar novamente</a>
            </div>
        </div>
        </div>
        ";
    }
?>