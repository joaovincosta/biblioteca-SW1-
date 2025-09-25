<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biblioteca joão vinícius costa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include_once 'pedaco.php'; ?>
</head>
<body>
    <div class="btn-group my-3" role="group" aria-label="Basic mixed styles example">
        <a href="#ListaLivros" type="button" class="btn btn-danger">lista de livros</a>
        <a href="form_cadastro.php" type="button" class="btn btn-success">cadastrar livros</a>
    </div>

    <div id="ListaLivros">
        <?php include_once 'listar.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>