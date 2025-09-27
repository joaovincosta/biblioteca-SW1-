<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
<?php
    require 'conexao.php';
    require 'pedaco.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM livros WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    
    if ($stmt->execute()) {
    echo "
    <div class='container my-5'>
      <div class='card text-center'>
        <div class='card-body' class='btn-group' role='group'>
          <h5 class='card-title'>tudo certo!</h5>
          <p class='card-text'>o livro foi excluído com sucesso.</p>
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
            <p class='card-text'>ocorreu um erro ao excluir o livro.</p>
            <a href='index.php' class='btn btn-danger btn-lg'>tentar novamente</a>
            </div>
        </div>
        </div>
        ";
    }
?>