<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Sessões</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>PHP: Sessões</h1>

    <?php
      if (isset($_SESSION['x'])) {
        echo "<h4>Variável x já existe: $_SESSION[x]. Removendo...</h4>";
        session_unset();
      } else {
        echo "<h4>Variável x não existe.</h4>";
        $_SESSION['x'] = 'ABCDE';
      }
    ?>

    <a href="a.php">Página </a>

  </body>

</html>
