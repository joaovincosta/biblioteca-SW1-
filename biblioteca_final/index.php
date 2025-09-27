<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biblioteca joão vinícius costa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body class="page-home">


  <section class="hero">
    <div class="container text-center">
      <h1>biblioteca joão vinícius costa</h1>

      <div class="controls mt-4">
        <div class="btn-group" role="group">
          <a href="#ListaLivros" class="btn btn-danger btn-lg">lista de livros</a>
          <a href="form_cadastro.php" class="btn btn-success btn-lg">cadastrar livros</a>
        </div>
      </div>
    </div>
  </section>

  <section id="ListaLivros" class="main-content">
    <?php include_once 'listar.php'; ?>
  </section>

  <footer></footer>
</body>
</html>