<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Variáveis Superglobais</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>PHP: Variáveis Superglobais</h1>

    <h3>Exercício 04</h3>

    <form method="POST" action="ex04.php">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" />
      <br>
      <br>

      <label for="idade">Idade:</label>
      <input type="number" id="idade" name="idade" />
      <br>
      <br>

      <input type="submit" value="Enviar" />
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $nome = $_POST['nome'];
      $idade = $_POST['idade'];

      echo "<h4>Olá $nome! Você tem $idade anos.</h4>";
    }
    ?>

  </body>
</html>
