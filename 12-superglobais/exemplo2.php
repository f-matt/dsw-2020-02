<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Variáveis Superglobais</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Exemplo</h1>

    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "<h3>O número $_GET[numero] foi recebido via GET</h3>";
      } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<h3>O número $_POST[numero] foi recebido via POST</h3>";
      } else {
        echo "<h3>Método incorreto: $_SERVER[REQUEST_METHOD]</h3>";
      }
    ?>

    <a href="exemplo1.php">Voltar</a>
  </body>
</html>
