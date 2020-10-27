<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Variáveis Superglobais</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>PHP: Variáveis Superglobais</h1>

    <h3>Exercício 01</h3>

    <form method="POST" action="ex01c.php">
      <label for="numero">Numero:</label>
      <input type="text" id="numero" name="numero" />
      <input type="submit" value="Enviar" />
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $n = $_POST['numero'];
      $dobro = 2 * $n;

      echo "<h4>O dobro de $n é $dobro.</h4>";
    }
    ?>
  </body>
</html>
