<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include_once 'pedaco.php'; ?>
</head>
<body>
    <div class="container my-4">
        <h2>formulário para cadastro dos livros</h2>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" name="titulo" class="form-control" placeholder="Digite o título do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="genero" class="form-control" placeholder="Digite o gênero do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="autor" class="form-control" placeholder="Digite o autor do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="ano" class="form-control" placeholder="Digite o ano da publicação do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="paginas" class="form-control" placeholder="Digite a quantidade de páginas do livro">
            </div>
            <button type="submit" class="btn btn-info">Cadastrar Livro</button>
            <a href="index.php" class="btn btn-warning">Voltar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>