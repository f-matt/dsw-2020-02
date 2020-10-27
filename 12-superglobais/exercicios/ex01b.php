<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Variáveis Superglobais</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>PHP: Variáveis Superglobais</h1>

    <h3>Exercício 01</h3>

    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n = $_POST['numero'];
        $dobro = 2 * $n;

        echo "<h4>O dobro de $n é $dobro.</h4>";
      }
    ?>

    <a href="ex01a.php">Voltar</a>
  </body>
</html>
