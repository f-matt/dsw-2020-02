<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>PHP: Exemplo Sessões</title>
    <meta charset="utf-8" />
  </head>

  <body>
    <h1>Exemplo: Lista de Contatos</h1>

    <?php
      if (!isset($_SESSION['contatos'])) {
        $c1 = array('id' => 1, 'nome' => 'João', 'email' => 'joao@mail.com');
        $c2 = array('id' => 2, 'nome' => 'José', 'email' => 'jose@mail.com');
        $c3 = array('id' => 3, 'nome' => 'Maria', 'email' => 'maria@mail.com');

        $_SESSION['contatos'] = array($c1, $c2, $c3);
      }
    ?>

    <h3><a href="busca.php">Pesquisar contatos</a></h3>

    <h3><a href="novo.php">Novo contato</a></h3>

  </body>

</html>
