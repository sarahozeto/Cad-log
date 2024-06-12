<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head>
    <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content ="Hugo 0.115.4">
    <title>Cover Template · Bootstrap v5.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" type="text/css" media="screen" href="cover.css">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">CADASTRO</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="index.php">HOME</a>
            <a class="nav-link fw-bold py-1 px-0 active" href="cad.php">CADASTRO</a>
            <a class="nav-link fw-bold py-1 px-0" href="log.php">LOGIN</a>
          </nav>
        </div>
      </header>
      <div class="cad">
        <form id="registrationForm" action="validate.php" method="post">
          <label for="nome">Digite seu nome</label><br>
          <input type="text" id="nome" name="nome" required><br><br>
 
          <label for="idd">Digite sua idade</label><br>
          <input type="number" id="idd" name="idd" required><br><br>
 
          <label for="email">Digite seu email</label><br>
          <input type="email" id="email" name="email" required><br><br>
 
          <label for="senha">Crie uma senha</label><br>
          <input type="password" id="senha" name="senha" required><br><br>
 
          <button type="submit" color="white">Cadastrar</button>
        </form>
      </div>
      <footer class="mt-auto text-white-50">
        <p>Modelo por <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href=https://github.com/sarahozeto class="text-white">@ozztosarah</a>.</p>
      </footer>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>