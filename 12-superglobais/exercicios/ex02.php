<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Variáveis Superglobais</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>PHP: Variáveis Superglobais</h1>

    <h3>Exercício 02</h3>

    <form method="POST" action="ex02.php">
      <label for="numero">Numero:</label>
      <input type="text" id="numero" name="numero" />
      <input type="submit" value="Enviar" />
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $n = $_POST['numero'];

      if ($n % 2 == 0) {
        echo "<h4>O número $n é PAR.</h4>";
      } else {
        echo "<h4>O número $n é ÍMPAR.</h4>";
      }
    }
    ?>
  </body>
</html>
