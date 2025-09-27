<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once 'pedaco.php'; ?>
    <h2 class="text-center my-4">formulário para cadastro dos livros</h2>
    <div class="container my-4">
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" name="titulo" class="form-control" placeholder="digite o título do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="genero" class="form-control" placeholder="digite o gênero do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="autor" class="form-control" placeholder="digite o autor do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="ano" class="form-control" placeholder="digite o ano da publicação do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="paginas" class="form-control" placeholder="digite a quantidade de páginas do livro">
            </div>
            <button type="submit" class="btn btn-info">cadastrar livro</button>
            <a href="index.php" class="btn btn-warning">voltar</a>
        </form>
    </div>
    <footer></footer>
</body>
</html>