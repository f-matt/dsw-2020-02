<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Variáveis Superglobais</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>PHP: Variáveis Superglobais</h1>

    <h3>Exercício 03</h3>

    <form method="POST" action="ex03.php">
      <label for="numero">Número:</label>
      <input type="text" id="numero" name="numero" />
      <input type="submit" value="Enviar" />
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $n = $_POST['numero'];

      if ($n == 1 || $n == 2) {
        echo "<h4>O número $n é primo.</h4>";
        return;
      }

      $primo = true;

      for ($i = 2; $i < $n; ++$i) {
        if ($n % $i == 0) {
          $primo = false;
          break;
        }
      }

      if ($primo) {
        echo "<h4>O número $n é primo.</h4>";
      } else {
        echo "<h4>O número $n não é primo.</h4>";
      }
    }
    ?>

  </body>
</html>
